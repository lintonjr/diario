        <div class="card-header">
            <h4 class="card-title">Form wizard</h4>
            <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
            <div class="heading-elements">
                <ul class="list-inline mb-0">
                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                </ul>
            </div>
        </div>
    <div class="card-body">
        <form action="#" class="icons-tab-steps wizard-notification wizard clearfix" role="application" id="steps-uid-1">
            <div class="steps clearfix">
                <ul role="tablist">
                    <li role="tab" class="first current" aria-disabled="false" aria-selected="true">
                        <a id="steps-uid-1-t-0" href="#steps-uid-1-h-0" aria-controls="steps-uid-1-p-0">
                            <span class="current-info audible">passo atual: </span>
                            <span class="step"><i class="step-icon la la-home"></i></span>  Passo 1
                        </a>
                    </li>
                    <li role="tab" class="done" aria-disabled="false" aria-selected="false">
                        <a id="steps-uid-1-t-1" href="#steps-uid-1-h-1" aria-controls="steps-uid-1-p-1">
                            <span class="step"><i class="step-icon la la-pencil"></i></span> Passo 2
                        </a>
                        </li>
                        <li role="tab" class="done" aria-disabled="false" aria-selected="false">
                            <a id="steps-uid-1-t-2" href="#steps-uid-1-h-2" aria-controls="steps-uid-1-p-2">
                                <span class="step"><i class="step-icon la la-tv"></i></span> Passo 3
                            </a>
                        </li>
                        <li role="tab" class="last done" aria-disabled="false" aria-selected="false">
                            <a id="steps-uid-1-t-3" href="#steps-uid-1-h-3" aria-controls="steps-uid-1-p-3">
                                <span class="step"><i class="step-icon la la-image"></i></span> Passo 4
                            </a>
                        </li>
                    </ul>
                </div>
        <div class="content clearfix">

            <!-- Step 1 -->
            <h6 id="steps-uid-1-h-0" tabindex="-1" class="title current"><i class="step-icon la la-home"></i> Passo 1</h6>
            <fieldset id="steps-uid-1-p-0" role="tabpanel" aria-labelledby="steps-uid-1-h-0" class="body current" aria-hidden="false" style="">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="firstName2">Nome :</label>
                            <input type="text" class="form-control" id="firstName2">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="lastName2">Sobrenome :</label>
                            <input type="text" class="form-control" id="lastName2">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="emailAddress3">E-mail :</label>
                            <input type="email" class="form-control" id="emailAddress3">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="location2">Cidade :</label>
                            <select class="c-select form-control" id="location2" name="location">
                                <option value="">Selecione a cidade</option>
                                <option value="Manaus">Manaus</option>
                                <option value="Tabatinga">Tabatinga</option>
                                <option value="Carauari">Carauari</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="phoneNumber2">Telefone :</label>
                            <input type="tel" class="form-control" id="phoneNumber2">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="date2">Nascimento :</label>
                            <input type="date" class="form-control" id="date2">
                        </div>
                    </div>
                </div>
            </fieldset>

        <!-- Step 2 -->
            <h6 id="steps-uid-1-h-1" tabindex="-1" class="title"><i class="step-icon la la-pencil"></i>Passo 2</h6>
            <fieldset id="steps-uid-1-p-1" role="tabpanel" aria-labelledby="steps-uid-1-h-1" class="body" aria-hidden="true" style="display: none;">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="proposalTitle2">Proposta :</label>
                            <input type="text" class="form-control" id="proposalTitle2">
                        </div>
                        <div class="form-group">
                            <label for="emailAddress4">E-mail :</label>
                            <input type="email" class="form-control" id="emailAddress4">
                        </div>
                        <div class="form-group">
                            <label for="videoUrl2">Video URL :</label>
                            <input type="url" class="form-control" id="videoUrl2">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="jobTitle2">Título :</label>
                            <input type="text" class="form-control" id="jobTitle2">
                        </div>
                        <div class="form-group">
                            <label for="shortDescription2">Descrição :</label>
                            <textarea name="shortDescription" id="shortDescription2" rows="4" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
            </fieldset>

        <!-- Step 3 -->
            <h6 id="steps-uid-1-h-2" tabindex="-1" class="title"><i class="step-icon la la-tv"></i>Passo 3</h6>
            <fieldset id="steps-uid-1-p-2" role="tabpanel" aria-labelledby="steps-uid-1-h-2" class="body" aria-hidden="true" style="display: none;">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="eventName2">Nome do evento :</label>
                            <input type="text" class="form-control" id="eventName2">
                        </div>
                        <div class="form-group">
                            <label for="eventType2">Tipo do Evento :</label>
                            <select class="c-select form-control" id="eventType2" data-placeholder="Type to search cities" name="eventType2">
                                <option value="Banquet">Banquete</option>
                                <option value="Fund Raiser">Angariar fundos</option>
                                <option value="Dinner Party">Jantar festivo</option>
                                <option value="Wedding">Casamento</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="eventLocation2">Local :</label>
                            <select class="c-select form-control" id="eventLocation2" name="location">
                                <option value="">Cidade</option>
                                <option value="Manaus">Manaus</option>
                                <option value="Tabatinga">Tabatinga</option>
                                <option value="Urucara">Urucará</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Data - Hora :</label>
                            <div class="input-group">
                                <input type="text" class="form-control datetime">
                                <span class="input-group-addon">
                                    <span class="ft-calendar"></span>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="eventStatus2">Status :</label>
                            <select class="c-select form-control" id="eventStatus2" name="eventStatus">
                                <option value="Planning">Em Planejamento</option>
                                <option value="In Progress">Em Progresso</option>
                                <option value="Finished">Finalizado</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Requisitos :</label>
                            <div class="c-inputs-stacked">
                                <div class="d-inline-block custom-control custom-checkbox">
                                    <input type="checkbox" name="status2" class="custom-control-input" id="staffing2">
                                    <label class="custom-control-label" for="staffing2">Comissão</label>
                                </div>
                                <div class="d-inline-block custom-control custom-checkbox">
                                    <input type="checkbox" name="status2" class="custom-control-input" id="catering2">
                                    <label class="custom-control-label" for="catering2">Refeições</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>

        <!-- Step 4 -->
            <h6 id="steps-uid-1-h-3" tabindex="-1" class="title"><i class="step-icon la la-image"></i>Passo 4</h6>
            <fieldset id="steps-uid-1-p-3" role="tabpanel" aria-labelledby="steps-uid-1-h-3" class="body" aria-hidden="true" style="display: none;">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="meetingName2">Nome do encontro :</label>
                            <input type="text" class="form-control" id="meetingName2">
                        </div>

                        <div class="form-group">
                            <label for="meetingLocation2">Localização :</label>
                            <input type="text" class="form-control" id="meetingLocation2">
                        </div>

                        <div class="form-group">
                            <label for="participants2">Nome dos participantes</label>
                            <textarea name="participants" id="participants2" rows="4" class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="decisions2">Decisões alcançadas</label>
                            <textarea name="decisions" id="decisions2" rows="4" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Agenda Items :</label>
                            <div class="c-inputs-stacked">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" name="agenda2" class="custom-control-input" id="item21">
                                    <label class="custom-control-label" for="item21">1st item</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" name="agenda2" class="custom-control-input" id="item22">
                                    <label class="custom-control-label" for="item22">2nd item</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" name="agenda2" class="custom-control-input" id="item23">
                                    <label class="custom-control-label" for="item23">3rd item</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" name="agenda2" class="custom-control-input" id="item24">
                                    <label class="custom-control-label" for="item24">4th item</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" name="agenda2" class="custom-control-input" id="item25">
                                    <label class="custom-control-label" for="item25">5th item</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>
            </div>
                <div class="actions clearfix">
                    <ul role="menu" aria-label="Pagination">
                        <li class="disabled" aria-disabled="true">
                            <a href="#previous" role="menuitem">Anterior</a>
                        </li>
                        <li aria-hidden="false" aria-disabled="false" class="" style="">
                            <a href="#next" role="menuitem">Proximo</a>
                        </li>
                        <li aria-hidden="true" style="display: none;">
                            <a href="#finish" role="menuitem">Enviar</a>
                        </li>
                    </ul>
                </div>
        </form>
    </div>
