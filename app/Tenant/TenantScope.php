<?php

namespace App\Tenant;


use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;


use App\Models\Administrative\Client;
use App\Models\Administrative\Entity;
use App\Models\Administrative\Section;
use App\Models\Administrative\Type;
use DB;

class TenantScope implements Scope
{

    /**
     * Apply the scope to a given Eloquent query builder.
     *
     * @param  \Illuminate\Database\Eloquent\Builder $builder
     * @param  \Illuminate\Database\Eloquent\Model $model
     * @return void
     */
    public function apply(Builder $builder, Model $model)
    {
        
        $model_group_1 = array("Entity", "Calendar", "Section", "Daily");
        $model_group_2 = array("Agency");
        $model_group_3 = array("Type", "Theme");
        $model_group_4 = array("Subtype");
        $model_group_5 = array("User");
        $model_group_6 = array("Layout");

        $model_name = class_basename($model);
                               
        $tenant = \Tenant::getTenant();
        $role = \Tenant::getRole();
        if ($tenant) {

            if ($model_name == "Client") {
                $builder->whereIn('id', $tenant);
            }

            if (in_array($model_name, $model_group_1)){
                $builder->whereIn('client_id', $tenant);
            }

            if (in_array($model_name, $model_group_2)){
                if ($role == "Gestor da Entidade") {
                    $entity_id = \Tenant::getEntity();
                    $builder->where('entity_id', $entity_id);
                }
                else {
                    $ids = Entity::whereIn('client_id', $tenant)->get()->pluck(['id']);
                    $builder->whereIn('entity_id', $ids);
                }

                /*
                $builder->with(["entities" => function($q) use ($tenant) {
                    $q->whereIn('entities.client_id', $tenant);
                }]);
                */
            }

            if (in_array($model_name, $model_group_3)){
                $ids = Section::whereIn('client_id', $tenant)->get()->pluck(['id']);
                $builder->whereIn('section_id', $ids);
            }

            if (in_array($model_name, $model_group_4)){
                $ids = Section::whereIn('client_id', $tenant)->get()->pluck(['id']);
                $ids2 = Type::whereIn('section_id', $ids)->get()->pluck(['id']);
                
                $builder->whereIn('type_id', $ids2);
            }

            if (in_array($model_name, $model_group_5)){
                $ids = Client::select(DB::raw('client_user.*', 'client_user.user_id as user_id'))
                            ->leftJoin('client_user', 'clients.id', '=', 'client_user.client_id')->whereIn('client_user.client_id', $tenant)->get()->pluck(['user_id']);
                
                if ($ids) {
                    $builder->whereIn('id', $ids);
                }
            }

            if (in_array($model_name, $model_group_6)){
                $ids = Client::whereIn('id', $tenant)->get()->pluck(['layout_pattern_id']);
                
                if ($ids) {
                    $builder->whereIn('layout_pattern_id', $ids);
                }
            }
            
        }
    }
}