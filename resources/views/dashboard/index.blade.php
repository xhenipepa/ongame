@extends('layouts.panel')
@section('content')
    <!-- ! Main -->
    <main class="main" id="skip-target">
        <div class="container">
            <h2 class="main-title">Media Library</h2>
            <div class="media-content">
                <div class="row">
                    <div class="col-lg-3">
                        <h3 class="media-sidebar__title">Quick links</h3>
                        <div class="media-sidebar">
                            <ul class="quick-links">
                                <li id="heroes-list">
                                    <a class="info" href="#">
                                        <div class="quick-links-icon">
                                            <span class="icon time-circle" aria-hidden="true"></span>
                                        </div>
                                        <div class="quick-links-text">
                                            <span class="quick-links__title">Recent files</span>
                                            <span class="quick-links__subtitle">Recent uploaded files</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        <a href="{{route('heroes.create')}}" class="btn-primary btn" type="submit">Create Hero's</a>
                       <div class="media-sidebar">
                           <ul class="quick-links">
                               <li>
                                   <a class="info" href="">
                                       <div class="quick-links-icon">
                                           <span class="icon time-circle" aria-hidden="true"></span>
                                       </div>
                                       <div class="quick-links-text">
                                           <span class="quick-links__title">Goku</span>
                                           <span class="quick-links__subtitle">Dragon ball</span>
                                       </div>
                                   </a>
                               </li>
                               <li>
                                   <a class="success" href="#">
                                       <div class="quick-links-icon">
                                           <span class="icon google-drive" aria-hidden="true"></span>
                                       </div>
                                       <div class="quick-links-text">
                                           <span class="quick-links__title">Naruto</span>
                                           <span class="quick-links__subtitle">Naruto</span>
                                       </div>
                                   </a>
                               </li>
                               <li>
                                   <a class="primary" href="#">
                                       <div class="quick-links-icon">
                                           <span class="icon dropbox" aria-hidden="true"></span>
                                       </div>
                                       <div class="quick-links-text">
                                            <span class="quick-links__title">SpiderMan</span>
                                            <span class="quick-links__subtitle">Marvel</span>
                                       </div>
                                   </a>
                               </li>
                               <li>
                                    <a class="warning" href="#">
                                        <div class="quick-links-icon">
                                            <span class="icon star" aria-hidden="true"></span>
                                        </div>
                                        <div class="quick-links-text">
                                            <span class="quick-links__title">Vegeta</span>
                                            <span class="quick-links__subtitle">Dargon Ball</span>
                                        </div>
                                    </a>
                               </li>
                               <li>
                                    <a class="danger" href="#">
                                        <div class="quick-links-icon">
                                            <span class="icon delete" aria-hidden="true"></span>
                                        </div>
                                        <div class="quick-links-text">
                                            <span class="quick-links__title">Luffy</span>
                                            <span class="quick-links__subtitle">One Pice</span>
                                        </div>
                                    </a>
                               </li>
                           </ul>
                            <div class="storage">
                                <span class="storage__indicator">Free</span>
                                <h4 class="storage__title">Storage</h4>
                                <div class="progress">
                                    <div class="progress-bar fill-25" role="progressbar"></div>
                                </div>
                                <p class="storage__info">4.06 GB (32%) of 15 GB used</p>
                            </div>
                            <div class="upgrade">
                                <p>Upgrade to <b>PRO</b> for get unlimited storage.</p>
                                <a class="upgrade-btn" href="#">Upgrade now
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-chevron-right">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="sort-bar media-bar">
                            <div class="sort-bar-start">
                                <div class="search-wrapper">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-search" aria-hidden="true">
                                        <circle cx="11" cy="11" r="8"></circle>
                                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                    </svg>
                                    <label>
                                        <input type="text" placeholder="Search" required="">
                                    </label>
                                </div>
                            </div>
                            <div class="sort-bar-end">
                                <div class="select-wrapper me-10">
                                    <button class="view-sort-btn transparent-btn" type="button" title="Grid view">
                                        <span class="sr-only">Grid view</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid"
                                             aria-hidden="true">
                                            <rect x="3" y="3" width="7" height="7"></rect>
                                            <rect x="14" y="3" width="7" height="7"></rect>
                                            <rect x="14" y="14" width="7" height="7"></rect>
                                            <rect x="3" y="14" width="7" height="7"></rect>
                                        </svg>
                                    </button>
                                </div>
                                <div class="select-wrapper">
                                    <button class="view-sort-btn transparent-btn" type="button" title="List view">
                                        <span class="sr-only">List view</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round" class="feather feather-list"
                                             aria-hidden="true">
                                            <line x1="8" y1="6" x2="21" y2="6"></line>
                                            <line x1="8" y1="12" x2="21" y2="12"></line>
                                            <line x1="8" y1="18" x2="21" y2="18"></line>
                                            <line x1="3" y1="6" x2="3.01" y2="6"></line>
                                            <line x1="3" y1="12" x2="3.01" y2="12"></line>
                                            <line x1="3" y1="18" x2="3.01" y2="18"></line>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                        < class="users-table table-wrapper">
                            <table class="library-table">
                                <thead>
                                    <tr class="users-table-info">
                                        <th>
                                            <label class="users-table__checkbox ms-20">
                                                <input type="checkbox" class="check-all">ID
                                            </label>
                                        </th>
                                        <th>Name</th>
                                        <th>Last modified</th>
                                        <th>Uploaded date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <label class="users-table__checkbox">
                                                <input type="checkbox" class="check">
                                                #5162
                                            </label>
                                        </td>
                                        <td>
                                            <div class="library-table-name">
                                                <span class="info">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                         stroke-linejoin="round" class="feather feather-folder" aria-hidden="true">
                                                        <path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path>
                                                    </svg>
                                                </span>
                                                    Documents
                                            </div>
                                        </td>
                                        <td>3 days ago</td>
                                        <td>14 April 2021</td>
                                        <td>
                                            <span class="p-relative">
                                                <button class="dropdown-btn transparent-btn" type="button" title="More info">
                                                    <span class="sr-only">More info</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                         stroke-linejoin="round" class="feather feather-more-horizontal" aria-hidden="true">
                                                         <circle cx="12" cy="12" r="1"></circle>
                                                         <circle cx="19" cy="12" r="1"></circle>
                                                         <circle cx="5" cy="12" r="1"></circle>
                                                    </svg>
                                                </button>
                                            </span>
                                            <span>
                                              <ul class="users-item-dropdown dropdown">
                                                <li><a href="#">Edit</a></li>
                                                <li><a href="#">Quick edit</a></li>
                                                <li><a href="#">Trash</a></li>
                                              </ul>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="users-table__checkbox">
                                                <input type="checkbox" class="check">
                                                #5162
                                            </label>
                                        </td>
                                        <td>
                                            <div class="library-table-name">
                                              <span class="info">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                     stroke-linejoin="round" class="feather feather-folder" aria-hidden="true">
                                                    <path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path>
                                                </svg>
                                              </span>
                                                Documents
                                            </div>
                                        </td>
                                        <td>10 minutes ago</td>
                                        <td>14 April 2021</td>
                                        <td>
                                            <span class="p-relative">
                                              <button class="dropdown-btn transparent-btn" type="button" title="More info">
                                                <span class="sr-only">More info</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                     stroke-linejoin="round" class="feather feather-more-horizontal" aria-hidden="true">
                                                    <circle cx="12" cy="12" r="1"></circle>
                                                    <circle cx="19" cy="12" r="1"></circle>
                                                    <circle cx="5" cy="12" r="1"></circle>
                                                </svg>
                                              </button>
                                              <ul class="users-item-dropdown dropdown">
                                                <li><a href="#">Edit</a></li>
                                                <li><a href="#">Quick edit</a></li>
                                                <li><a href="#">Trash</a></li>
                                              </ul>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="users-table__checkbox">
                                                <input type="checkbox" class="check">
                                                #5162
                                            </label>
                                        </td>
                                        <td>
                                            <div class="library-table-name">
                                              <span class="info">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                     stroke-linejoin="round" class="feather feather-folder" aria-hidden="true">
                                                    <path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path>
                                                </svg>
                                              </span>
                                                Presentations
                                            </div>
                                        </td>
                                        <td>2 hours ago</td>
                                        <td>14 April 2021</td>
                                        <td>
                                            <span class="p-relative">
                                              <button class="dropdown-btn transparent-btn" type="button" title="More info">
                                                  <span class="sr-only">More info</span>>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                     stroke-linejoin="round" class="feather feather-more-horizontal" aria-hidden="true">
                                                    <circle cx="12" cy="12" r="1"></circle>
                                                    <circle cx="19" cy="12" r="1"></circle>
                                                    <circle cx="5" cy="12" r="1"></circle>
                                                </svg>
                                              </button>
                                              <ul class="users-item-dropdown dropdown">
                                                <li><a href="#">Edit</a></li>
                                                <li><a href="#">Quick edit</a></li>
                                                <li><a href="#">Trash</a></li>
                                              </ul>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="users-table__checkbox">
                                                <input type="checkbox" class="check">
                                                #5162
                                            </label>
                                        </td>
                                        <td>
                                            <div class="library-table-name">
                                                  <span class="purple">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                         stroke-linejoin="round" class="feather feather-image" aria-hidden="true">
                                                        <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                                        <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                                        <polyline points="21 15 16 10 5 21"></polyline>
                                                    </svg>
                                                  </span>
                                            </div>
                                        </td>
                                        <td>2 minutes ago</td>
                                        <td>14 April 2021</td>
                                        <td>
                                            <span class="p-relative">
                                              <button class="dropdown-btn transparent-btn" type="button" title="More info">
                                                <span class="sr-only">More info</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                     stroke-linejoin="round" class="feather feather-more-horizontal" aria-hidden="true">
                                                    <circle cx="12" cy="12" r="1"></circle>
                                                    <circle cx="19" cy="12" r="1"></circle>
                                                    <circle cx="5" cy="12" r="1"></circle>
                                                </svg>
                                              </button>
                                              <ul class="users-item-dropdown dropdown">
                                                <li><a href="#">Edit</a></li>
                                                <li><a href="#">Quick edit</a></li>
                                                <li><a href="#">Trash</a></li>
                                              </ul>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="users-table__checkbox">
                                                <input type="checkbox" class="check">
                                                #5162
                                            </label>
                                        </td>
                                        <td>
                                            <div class="library-table-name">
                                                  <span class="purple">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                         stroke-linejoin="round" class="feather feather-image" aria-hidden="true">
                                                        <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                                        <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                                        <polyline points="21 15 16 10 5 21"></polyline>
                                                    </svg>
                                                  </span>
                                            </div>
                                        </td>
                                        <td>2 minutes ago</td>
                                        <td>14 April 2021</td>
                                        <td>
                                            <span class="p-relative">
                                              <button class="dropdown-btn transparent-btn" type="button" title="More info">
                                                <span class="sr-only">More info</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                     stroke-linejoin="round" class="feather feather-more-horizontal" aria-hidden="true">
                                                    <circle cx="12" cy="12" r="1"></circle>
                                                    <circle cx="19" cy="12" r="1"></circle>
                                                    <circle cx="5" cy="12" r="1"></circle>
                                                </svg>
                                              </button>
                                              <ul class="users-item-dropdown dropdown">
                                                <li><a href="#">Edit</a></li>
                                                <li><a href="#">Quick edit</a></li>
                                                <li><a href="#">Trash</a></li>
                                              </ul>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="users-table__checkbox">
                                                <input type="checkbox" class="check">
                                                #5162
                                            </label>
                                        </td>
                                        <td>
                                            <div class="library-table-name">
                                                  <span class="purple">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                         stroke-linejoin="round" class="feather feather-image" aria-hidden="true">
                                                        <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                                        <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                                        <polyline points="21 15 16 10 5 21"></polyline>
                                                    </svg>
                                                  </span>
                                            </div>
                                        </td>
                                        <td>2 minutes ago</td>
                                        <td>14 April 2021</td>
                                        <td>
                                            <span class="p-relative">
                                              <button class="dropdown-btn transparent-btn" type="button" title="More info">
                                                <span class="sr-only">More info</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                     stroke-linejoin="round" class="feather feather-more-horizontal" aria-hidden="true">
                                                    <circle cx="12" cy="12" r="1"></circle>
                                                    <circle cx="19" cy="12" r="1"></circle>
                                                    <circle cx="5" cy="12" r="1"></circle>
                                                </svg>
                                              </button>
                                              <ul class="users-item-dropdown dropdown">
                                                <li><a href="#">Edit</a></li>
                                                <li><a href="#">Quick edit</a></li>
                                                <li><a href="#">Trash</a></li>
                                              </ul>
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="library-table-sum">
                            <p><span class="checked-sum">0</span> Item selected</p>
                            <button class="media-table-btn" type="button">Assign to folder</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('afterScripts')
    <script>
        isNotTokenPresent();

        $(document).ready(function () {

            $.ajax({
                type: "GET",
                url: `${base_api_url}/me`,
                beforeSend: function(request) {
                    request.setRequestHeader("Accept", 'application/json');
                    request.setRequestHeader("'Content-Type'", 'application/json');
                    request.setRequestHeader("Authorization", `Bearer ${sessionStorage.getItem('token')}`);
                },
                dataType: "json",
                encode: true,
                success: function (data) {
                    console.log(data);
                    alert('succes');
                },
                error: function (xhr) {
                    alert('error');
                    redirectToLogin();
                }
            }).done(function (data) {
                console.log(data);
            });
        })

        $(document).ready(function () {
            $.ajax({
                type: "GET",
                url: `${base_api_url}/heroes`,
                beforeSend: function(request) {
                    request.setRequestHeader("Accept", 'application/json');
                    request.setRequestHeader("'Content-Type'", 'application/json');
                    request.setRequestHeader("Authorization", `Bearer ${sessionStorage.getItem('token')}`);
                },
                dataType: "json",
                encode: true,
                success: function (data) {
                    $('#quick-links').append(
                        <li id="heroes-list">
                            <a class="info" href="#">
                                <div class="quick-links-icon">
                                    <span class="icon time-circle" aria-hidden="true"></span>
                                </div>
                                <div class="quick-links-text">
                                    <span class="quick-links__title">Recent files</span>
                                    <span class="quick-links__subtitle">Recent uploaded files</span>
                                </div>
                            </a>
                        </li>
                    );
                },
                error: function (xhr) {
                    alert('error');
                    redirectToLogin();
                }
            }).done(function (data) {
                console.log(data);
            });
        })
     </script>
@endsection
