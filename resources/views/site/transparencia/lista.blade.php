@extends('layouts.site')

@section('content')

    <div class="content-body">
        <section class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">My Task List</h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                <div class="heading-elements">
                  <span class="dropdown">
                    <button id="btnSearchDrop1" type="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false" class="btn btn-warning btn-sm dropdown-toggle dropdown-menu-right"><i class="ft-download white"></i></button>
                    <span aria-labelledby="btnSearchDrop1" class="dropdown-menu mt-1 dropdown-menu-right">
                      <a href="#" class="dropdown-item"><i class="la la-calendar"></i> Due Date</a>
                      <a href="#" class="dropdown-item"><i class="la la-random"></i> Priority </a>
                      <a href="#" class="dropdown-item"><i class="la la-bar-chart"></i> Progress</a>
                      <a href="#" class="dropdown-item"><i class="la la-user"></i> Assign to</a>
                    </span>
                  </span>
                </div>
              </div>
              <div class="card-content">
                <div class="card-body">
                  <!-- Task List table -->
                  <div class="table-responsive">
                    <table id="project-task-list" class="table table-white-space table-bordered row-grouping display no-wrap icheck table-middle">
                      <thead>
                        <tr>
                          <th>
                            <input type="checkbox" class="input-chk">
                          </th>
                          <th>Task</th>
                          <th>Priority</th>
                          <th>Progress</th>
                          <th>Owner</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <!-- ABC Project -->
                        <tr>
                          <td>
                            <input type="checkbox" class="input-chk">
                          </td>
                          <td>
                            <a href="#" class="text-bold-600">Complete the page header</a>
                            <p class="text-muted">Phasellus vel elit volutpat, egestas urna a, pharetra
                              nibh.
                            </p>
                          </td>
                          <td>
                            <span class="badge badge-default badge-danger">Critical</span>
                          </td>
                          <td>
                            <div class="progress progress-sm">
                              <div aria-valuemin="82" aria-valuemax="100" class="progress-bar bg-gradient-x-success"
                              role="progressbar" style="width:82%" aria-valuenow="82"></div>
                            </div>
                          </td>
                          <td class="text-center">
                            <span class="avatar avatar-busy">
                              <img src="{{ asset('modern/images/portrait/small/avatar-s-3.png') }}" alt="avatar"
                              data-toggle="tooltip" data-placement="right" title="John Doe"><i class=""></i>
                            </span>
                          </td>
                          <td>
                            <span class="dropdown">
                              <button id="btnSearchDrop2" type="button" data-toggle="dropdown" aria-haspopup="true"
                              aria-expanded="false" class="btn btn-info dropdown-toggle"><i class="la la-cog"></i></button>
                              <span aria-labelledby="btnSearchDrop2" class="dropdown-menu mt-1 dropdown-menu-right">
                                <a href="#" class="dropdown-item"><i class="ft-eye"></i> Open Task</a>
                                <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Edit Task</a>
                                <a href="#" class="dropdown-item"><i class="ft-check"></i> Complete Task</a>
                                <a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="ft-trash"></i> Delete Task</a>
                              </span>
                            </span>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <input type="checkbox" class="input-chk">
                          </td>
                          <td>
                            <a href="#" class="text-bold-600">Menu open issue on top</a>
                            <p class="text-muted">Proin varius libero at magna dignissim lacinia.</p>
                          </td>
                          <td>
                            <span class="badge badge-default badge-primary">Medium</span>
                          </td>
                          <td>
                            <div class="progress progress-sm">
                              <div aria-valuemin="30" aria-valuemax="100" class="progress-bar bg-gradient-x-warning"
                              role="progressbar" style="width:32%" aria-valuenow="32"></div>
                            </div>
                          </td>
                          <td class="text-center">
                            <span class="avatar avatar-online">
                              <img src="{{ asset('modern/images/portrait/small/avatar-s-5.png') }}" alt="avatar"
                              data-placement="right" title="Peater Doe"><i></i>
                            </span>
                          </td>
                          <td>
                            <span class="dropdown">
                              <button id="btnSearchDrop3" type="button" data-toggle="dropdown" aria-haspopup="true"
                              aria-expanded="false" class="btn btn-info dropdown-toggle"><i class="la la-cog"></i></button>
                              <span aria-labelledby="btnSearchDrop3" class="dropdown-menu mt-1 dropdown-menu-right">
                                <a href="#" class="dropdown-item"><i class="ft-eye"></i> Open Task</a>
                                <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Edit Task</a>
                                <a href="#" class="dropdown-item"><i class="ft-check"></i> Complete Task</a>
                                <a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="ft-trash"></i> Delete Task</a>
                              </span>
                            </span>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <input type="checkbox" class="input-chk">
                          </td>
                          <td>
                            <a href="#" class="text-bold-600">Integrate ChartJS Page</a>
                            <p class="text-muted"> Curabitur tempor, quam vel pulvinar finibus.</p>
                          </td>

                          <td>
                            <span class="badge badge-default badge-warning">High</span>
                          </td>
                          <td>
                            <div class="progress progress-sm">
                              <div aria-valuemin="20" aria-valuemax="100" class="progress-bar bg-gradient-x-danger"
                              role="progressbar" style="width:20%" aria-valuenow="20"></div>
                            </div>
                          </td>
                          <td class="text-center">
                            <span class="avatar avatar-online">
                              <img src="{{ asset('modern/images/portrait/small/avatar-s-6.png') }}" alt="avatar"
                              data-placement="right" title="Nicole Barrett"><i></i>
                            </span>
                          </td>
                          <td>
                            <span class="dropdown">
                              <button id="btnSearchDrop4" type="button" data-toggle="dropdown" aria-haspopup="true"
                              aria-expanded="false" class="btn btn-info dropdown-toggle"><i class="la la-cog"></i></button>
                              <span aria-labelledby="btnSearchDrop4" class="dropdown-menu mt-1 dropdown-menu-right">
                                <a href="#" class="dropdown-item"><i class="ft-eye"></i> Open Task</a>
                                <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Edit Task</a>
                                <a href="#" class="dropdown-item"><i class="ft-check"></i> Complete Task</a>
                                <a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="ft-trash"></i> Delete Task</a>
                              </span>
                            </span>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <input type="checkbox" class="input-chk">
                          </td>
                          <td>
                            <a href="#" class="text-bold-600">Support Charls Users</a>
                            <p class="text-muted"> Donec pulvinar nisi ac convallis porta.</p>
                          </td>
                          <td>
                            <span class="badge badge-default badge-info">Low</span>
                          </td>
                          <td>
                            <div class="progress progress-sm">
                              <div aria-valuemin="30" aria-valuemax="100" class="progress-bar bg-gradient-x-info"
                              role="progressbar" style="width:30%" aria-valuenow="30"></div>
                            </div>
                          </td>
                          <td class="text-center">
                            <span class="avatar avatar-off">
                              <img src="{{ asset('modern/images/portrait/small/avatar-s-7.png') }}" alt="avatar"
                              data-placement="right" title="Jason Robertson"><i></i>
                            </span>
                          </td>
                          <td>
                            <span class="dropdown">
                              <button id="btnSearchDrop5" type="button" data-toggle="dropdown" aria-haspopup="true"
                              aria-expanded="false" class="btn btn-info dropdown-toggle"><i class="la la-cog"></i></button>
                              <span aria-labelledby="btnSearchDrop5" class="dropdown-menu mt-1 dropdown-menu-right">
                                <a href="#" class="dropdown-item"><i class="ft-eye"></i> Open Task</a>
                                <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Edit Task</a>
                                <a href="#" class="dropdown-item"><i class="ft-check"></i> Complete Task</a>
                                <a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="ft-trash"></i> Delete Task</a>
                              </span>
                            </span>
                          </td>
                        </tr>
                        <!-- ABC Project -->
                        <tr>
                          <td>
                            <input type="checkbox" class="input-chk">
                          </td>
                          <td>
                            <a href="#" class="text-bold-600">UI/UX Design for the new Mobile APP</a>
                            <p class="text-muted">Phasellus vel elit volutpat, egestas urna a, pharetra
                              nibh.
                            </p>
                          </td>
                          <td>
                            <span class="badge badge-default badge-success">Low</span>
                          </td>
                          <td>
                            <div class="progress progress-sm">
                              <div aria-valuemin="100" aria-valuemax="100" class="progress-bar bg-gradient-x-success"
                              role="progressbar" style="width:100%" aria-valuenow="100"></div>
                            </div>
                          </td>
                          <td class="text-center">
                            <span class="avatar avatar-busy">
                              <img src="{{ asset('modern/images/portrait/small/avatar-s-7.png') }}" alt="avatar"
                              data-toggle="tooltip" data-placement="right" title="Willie Sanchez"><i class=""></i>
                            </span>
                          </td>
                          <td>
                            <span class="dropdown">
                              <button id="btnSearchDrop6" type="button" data-toggle="dropdown" aria-haspopup="true"
                              aria-expanded="false" class="btn btn-info dropdown-toggle"><i class="la la-cog"></i></button>
                              <span aria-labelledby="btnSearchDrop6" class="dropdown-menu mt-1 dropdown-menu-right">
                                <a href="#" class="dropdown-item"><i class="ft-eye"></i> Open Task</a>
                                <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Edit Task</a>
                                <a href="#" class="dropdown-item"><i class="ft-check"></i> Complete Task</a>
                                <a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="ft-trash"></i> Delete Task</a>
                              </span>
                            </span>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <input type="checkbox" class="input-chk">
                          </td>
                          <td>
                            <a href="#" class="text-bold-600">PSD Creation for the ABC APP</a>
                            <p class="text-muted">Phasellus vel elit volutpat, egestas urna a, pharetra
                              nibh.
                            </p>
                          </td>
                          <td>
                            <span class="badge badge-default badge-primary">Medium</span>
                          </td>
                          <td>
                            <div class="progress progress-sm">
                              <div aria-valuemin="50" aria-valuemax="100" class="progress-bar bg-gradient-x-info"
                              role="progressbar" style="width:50%" aria-valuenow="50"></div>
                            </div>
                          </td>
                          <td class="text-center">
                            <span class="avatar avatar-busy">
                              <img src="{{ asset('modern/images/portrait/small/avatar-s-8.png') }}" alt="avatar"
                              data-toggle="tooltip" data-placement="right" title="Mary Salazar"><i class=""></i>
                            </span>
                          </td>
                          <td>
                            <span class="dropdown">
                              <button id="btnSearchDrop7" type="button" data-toggle="dropdown" aria-haspopup="true"
                              aria-expanded="false" class="btn btn-info dropdown-toggle"><i class="la la-cog"></i></button>
                              <span aria-labelledby="btnSearchDrop7" class="dropdown-menu mt-1 dropdown-menu-right">
                                <a href="#" class="dropdown-item"><i class="ft-eye"></i> Open Task</a>
                                <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Edit Task</a>
                                <a href="#" class="dropdown-item"><i class="ft-check"></i> Complete Task</a>
                                <a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="ft-trash"></i> Delete Task</a>
                              </span>
                            </span>
                          </td>
                        </tr>
                        <!-- 2 Days Ago -->
                        <tr>
                          <td>
                            <input type="checkbox" class="input-chk">
                          </td>
                          <td>
                            <a href="#" class="text-bold-600">Fix bootstrap progress bar issue</a>
                            <p class="text-muted">Aliquam finibus tellus magna, eget viverra augue gravida
                              eget.
                            </p>
                          </td>
                          <td>
                            <span class="badge badge-default badge-primary">Medium</span>
                          </td>
                          <td>
                            <div class="progress progress-sm">
                              <div aria-valuemin="35" aria-valuemax="100" class="progress-bar bg-gradient-x-warning"
                              role="progressbar" style="width:35%" aria-valuenow="35"></div>
                            </div>
                          </td>
                          <td class="text-center">
                            <span class="avatar avatar-busy">
                              <img src="{{ asset('modern/images/portrait/small/avatar-s-9.png') }}" alt="avatar"
                              data-toggle="tooltip" data-placement="right" title="Jerry King"><i class=""></i>
                            </span>
                          </td>
                          <td>
                            <span class="dropdown">
                              <button id="btnSearchDrop8" type="button" data-toggle="dropdown" aria-haspopup="true"
                              aria-expanded="false" class="btn btn-info dropdown-toggle"><i class="la la-cog"></i></button>
                              <span aria-labelledby="btnSearchDrop8" class="dropdown-menu mt-1 dropdown-menu-right">
                                <a href="#" class="dropdown-item"><i class="ft-eye"></i> Open Task</a>
                                <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Edit Task</a>
                                <a href="#" class="dropdown-item"><i class="ft-check"></i> Complete Task</a>
                                <a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="ft-trash"></i> Delete Task</a>
                              </span>
                            </span>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <input type="checkbox" class="input-chk">
                          </td>
                          <td>
                            <a href="#" class="text-bold-600">Support Alib on form wizard</a>
                            <p class="text-muted"> Donec pulvinar nisi ac convallis porta.</p>
                          </td>
                          <td>
                            <span class="badge badge-default badge-info">Low</span>
                          </td>
                          <td>
                            <div class="progress progress-sm">
                              <div aria-valuemin="30" aria-valuemax="100" class="progress-bar bg-gradient-x-info"
                              role="progressbar" style="width:30%" aria-valuenow="30"></div>
                            </div>
                          </td>
                          <td class="text-center">
                            <span class="avatar avatar-off">
                              <img src="{{ asset('modern/images/portrait/small/avatar-s-11.png') }}" alt="avatar"
                              data-placement="right" title="Jason Robertson"><i></i>
                            </span>
                          </td>
                          <td>
                            <span class="dropdown">
                              <button id="btnSearchDrop9" type="button" data-toggle="dropdown" aria-haspopup="true"
                              aria-expanded="false" class="btn btn-info dropdown-toggle"><i class="la la-cog"></i></button>
                              <span aria-labelledby="btnSearchDrop9" class="dropdown-menu mt-1 dropdown-menu-right">
                                <a href="#" class="dropdown-item"><i class="ft-eye"></i> Open Task</a>
                                <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Edit Task</a>
                                <a href="#" class="dropdown-item"><i class="ft-check"></i> Complete Task</a>
                                <a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="ft-trash"></i> Delete Task</a>
                              </span>
                            </span>
                          </td>
                        </tr>
                        <!-- 3 Days Ago -->
                        <tr>
                          <td>
                            <input type="checkbox" class="input-chk">
                          </td>
                          <td>
                            <a href="#" class="text-bold-600">Integrate D3 JS Page</a>
                            <p class="text-muted"> Curabitur tempor, quam vel pulvinar finibus.</p>
                          </td>
                          <td>
                            <span class="badge badge-default badge-warning">High</span>
                          </td>
                          <td>
                            <div class="progress progress-sm">
                              <div aria-valuemin="20" aria-valuemax="100" class="progress-bar bg-gradient-x-danger"
                              role="progressbar" style="width:20%" aria-valuenow="20"></div>
                            </div>
                          </td>
                          <td class="text-center">
                            <span class="avatar avatar-online">
                              <img src="{{ asset('modern/images/portrait/small/avatar-s-6.png') }}" alt="avatar"
                              data-placement="right" title="Nicole Barrett"><i></i>
                            </span>
                          </td>
                          <td>
                            <span class="dropdown">
                              <button id="btnSearchDrop10" type="button" data-toggle="dropdown" aria-haspopup="true"
                              aria-expanded="false" class="btn btn-info dropdown-toggle"><i class="la la-cog"></i></button>
                              <span aria-labelledby="btnSearchDrop10" class="dropdown-menu mt-1 dropdown-menu-right">
                                <a href="#" class="dropdown-item"><i class="ft-eye"></i> Open Task</a>
                                <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Edit Task</a>
                                <a href="#" class="dropdown-item"><i class="ft-check"></i> Complete Task</a>
                                <a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="ft-trash"></i> Delete Task</a>
                              </span>
                            </span>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <input type="checkbox" class="input-chk">
                          </td>
                          <td>
                            <a href="#" class="text-bold-600">Contact Charls for Vertical Menu issuea</a>
                            <p class="text-muted"> Donec pulvinar nisi ac convallis porta.</p>
                          </td>
                          <td>
                            <span class="badge badge-default badge-info">Low</span>
                          </td>
                          <td>
                            <div class="progress progress-sm">
                              <div aria-valuemin="30" aria-valuemax="100" class="progress-bar bg-gradient-x-info"
                              role="progressbar" style="width:30%" aria-valuenow="30"></div>
                            </div>
                          </td>
                          <td class="text-center">
                            <span class="avatar avatar-off">
                              <img src="{{ asset('modern/images/portrait/small/avatar-s-7.png') }}" alt="avatar"
                              data-placement="right" title="Jason Robertson"><i></i>
                            </span>
                          </td>
                          <td>
                            <span class="dropdown">
                              <button id="btnSearchDrop11" type="button" data-toggle="dropdown" aria-haspopup="true"
                              aria-expanded="false" class="btn btn-info dropdown-toggle"><i class="la la-cog"></i></button>
                              <span aria-labelledby="btnSearchDrop11" class="dropdown-menu mt-1 dropdown-menu-right">
                                <a href="#" class="dropdown-item"><i class="ft-eye"></i> Open Task</a>
                                <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Edit Task</a>
                                <a href="#" class="dropdown-item"><i class="ft-check"></i> Complete Task</a>
                                <a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="ft-trash"></i> Delete Task</a>
                              </span>
                            </span>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <input type="checkbox" class="input-chk">
                          </td>
                          <td>
                            <a href="#" class="text-bold-600">UI/UX Design for the new Mobile APP</a>
                            <p class="text-muted">Phasellus vel elit volutpat, egestas urna a, pharetra
                              nibh.
                            </p>
                          </td>
                          <td>
                            <span class="badge badge-default badge-success">Low</span>
                          </td>
                          <td>
                            <div class="progress progress-sm">
                              <div aria-valuemin="100" aria-valuemax="100" class="progress-bar bg-gradient-x-success"
                              role="progressbar" style="width:100%" aria-valuenow="100"></div>
                            </div>
                          </td>
                          <td class="text-center">
                            <span class="avatar avatar-busy">
                              <img src="{{ asset('modern/images/portrait/small/avatar-s-7.png') }}" alt="avatar"
                              data-toggle="tooltip" data-placement="right" title="Willie Sanchez"><i class=""></i>
                            </span>
                          </td>
                          <td>
                            <span class="dropdown">
                              <button id="btnSearchDrop12" type="button" data-toggle="dropdown" aria-haspopup="true"
                              aria-expanded="false" class="btn btn-info dropdown-toggle"><i class="la la-cog"></i></button>
                              <span aria-labelledby="btnSearchDrop12" class="dropdown-menu mt-1 dropdown-menu-right">
                                <a href="#" class="dropdown-item"><i class="ft-eye"></i> Open Task</a>
                                <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Edit Task</a>
                                <a href="#" class="dropdown-item"><i class="ft-check"></i> Complete Task</a>
                                <a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="ft-trash"></i> Delete Task</a>
                              </span>
                            </span>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <input type="checkbox" class="input-chk">
                          </td>
                          <td>
                            <a href="#" class="text-bold-600">Admin PSD Creation for the ABC APP</a>
                            <p class="text-muted">Phasellus vel elit volutpat, egestas urna a, pharetra
                              nibh.
                            </p>
                          </td>
                          <td>
                            <span class="badge badge-default badge-primary">Medium</span>
                          </td>
                          <td>
                            <div class="progress progress-sm">
                              <div aria-valuemin="50" aria-valuemax="100" class="progress-bar bg-gradient-x-info"
                              role="progressbar" style="width:50%" aria-valuenow="50"></div>
                            </div>
                          </td>
                          <td class="text-center">
                            <span class="avatar avatar-busy">
                              <img src="{{ asset('modern/images/portrait/small/avatar-s-8.png') }}" alt="avatar"
                              data-toggle="tooltip" data-placement="right" title="Mary Salazar"><i class=""></i>
                            </span>
                          </td>
                          <td>
                            <span class="dropdown">
                              <button id="btnSearchDrop13" type="button" data-toggle="dropdown" aria-haspopup="true"
                              aria-expanded="false" class="btn btn-info dropdown-toggle"><i class="la la-cog"></i></button>
                              <span aria-labelledby="btnSearchDrop13" class="dropdown-menu mt-1 dropdown-menu-right">
                                <a href="#" class="dropdown-item"><i class="ft-eye"></i> Open Task</a>
                                <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Edit Task</a>
                                <a href="#" class="dropdown-item"><i class="ft-check"></i> Complete Task</a>
                                <a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="ft-trash"></i> Delete Task</a>
                              </span>
                            </span>
                          </td>
                        </tr>
                        <!-- 4 Days Ago -->
                        <tr>
                          <td>
                            <input type="checkbox" class="input-chk">
                          </td>
                          <td>
                            <a href="#" class="text-bold-600">Complete dashboard page design</a>
                            <p class="text-muted"> Curabitur tempor, quam vel pulvinar finibus.</p>
                          </td>
                          <td>
                            <span class="badge badge-default badge-warning">High</span>
                          </td>
                          <td>
                            <div class="progress progress-sm">
                              <div aria-valuemin="20" aria-valuemax="100" class="progress-bar bg-gradient-x-danger"
                              role="progressbar" style="width:20%" aria-valuenow="20"></div>
                            </div>
                          </td>
                          <td class="text-center">
                            <span class="avatar avatar-online">
                              <img src="{{ asset('modern/images/portrait/small/avatar-s-6.png') }}" alt="avatar"
                              data-placement="right" title="Nicole Barrett"><i></i>
                            </span>
                          </td>
                          <td>
                            <span class="dropdown">
                              <button id="btnSearchDrop14" type="button" data-toggle="dropdown" aria-haspopup="true"
                              aria-expanded="false" class="btn btn-info dropdown-toggle"><i class="la la-cog"></i></button>
                              <span aria-labelledby="btnSearchDrop14" class="dropdown-menu mt-1 dropdown-menu-right">
                                <a href="#" class="dropdown-item"><i class="ft-eye"></i> Open Task</a>
                                <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Edit Task</a>
                                <a href="#" class="dropdown-item"><i class="ft-check"></i> Complete Task</a>
                                <a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="ft-trash"></i> Delete Task</a>
                              </span>
                            </span>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <input type="checkbox" class="input-chk">
                          </td>
                          <td>
                            <a href="#" class="text-bold-600">Horizontal Menu Test on Mobile</a>
                            <p class="text-muted"> Donec pulvinar nisi ac convallis porta.</p>
                          </td>
                          <td>
                            <span class="badge badge-default badge-info">Low</span>
                          </td>
                          <td>
                            <div class="progress progress-sm">
                              <div aria-valuemin="30" aria-valuemax="100" class="progress-bar bg-gradient-x-info"
                              role="progressbar" style="width:30%" aria-valuenow="30"></div>
                            </div>
                          </td>
                          <td class="text-center">
                            <span class="avatar avatar-off">
                              <img src="{{ asset('modern/images/portrait/small/avatar-s-7.png') }}" alt="avatar"
                              data-placement="right" title="Jason Robertson"><i></i>
                            </span>
                          </td>
                          <td>
                            <span class="dropdown">
                              <button id="btnSearchDrop15" type="button" data-toggle="dropdown" aria-haspopup="true"
                              aria-expanded="false" class="btn btn-info dropdown-toggle"><i class="la la-cog"></i></button>
                              <span aria-labelledby="btnSearchDrop15" class="dropdown-menu mt-1 dropdown-menu-right">
                                <a href="#" class="dropdown-item"><i class="ft-eye"></i> Open Task</a>
                                <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Edit Task</a>
                                <a href="#" class="dropdown-item"><i class="ft-check"></i> Complete Task</a>
                                <a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="ft-trash"></i> Delete Task</a>
                              </span>
                            </span>
                          </td>
                        </tr>
                      </tbody>
                      <tfoot>
                        <tr>
                          <th>
                            <input type="checkbox" class="input-chk">
                          </th>
                          <th>Task</th>
                          <th>Priority</th>
                          <th>Progress</th>
                          <th>Owner</th>
                          <th>Actions</th>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                  <!--/ Task List table -->
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
@endsection
