<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use App\Models\Empresa\Empresa;
use App\Models\Sistema\SisModule;
use App\Models\Universal\UniTipo;
class SisAccount extends Model
{
	// public function sisaccount(){
	// 	return $this->belongsToMany(Empresa::class);
	// }
	protected $fillable = [
        'deleted_at', 'status', 'nome',
    ];

	public function module(){
		return $this->belongsToMany(SisModule::class);
	}

	public function modules(){
		return $this->belongsToMany(SisModule::class, 'sis_account_sis_module', 'sis_account_id', 'sis_module_id');
	}
	public function tipos(){
		return $this->belongsToMany(UniTipo::class, 'sis_account_uni_tipo', 'sis_account_id', 'uni_tipo_id');
	}

	public function user(){
		return $this->belongsTo(User::class)
					->with([
						        'contatos' => function($q){
						          $q->where('tipo_contato', 2)->orderBy('principal')->whereNull('deleted_at');
						        },
						        'enderecos' => function($q){
						          $q->orderBy('principal')->whereNull('deleted_at');
						        }
					      	]);
	}

	public function checkAccess($idmodule)
	{
		return $this->join('sis_vendas', 'sis_vendas.account_id', 'sis_accounts.id')
					->where('sis_vendas.account_id', Auth()->user()->sis_account_id)
					->where('sis_vendas.module_id', $idmodule)
					->where('sis_vendas.status', 'aprovado');
	}
}
