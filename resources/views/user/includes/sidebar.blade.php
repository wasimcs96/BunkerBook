

                  @if(Auth::check())

                  <div class="col-lg-4">
                      <ul class="list-group">
                          @if(Auth()->user()->isUniversity())
                      <li class="list-group-item">
                      <a href="#">Back to Home</a>
                      </li>
                      <li class="list-group-item">
                        <a href="#">My Profile</a>
                        </li>
                      <li class="list-group-item">
                      <a href="#">Create new Category</a>
                      </li>
                      @endif
                      <li class="list-group-item">
                      <a href="#">See Categories</a>
                      </li>
                      <li class="list-group-item">
                        <a href="#">See Tags</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#">Create new Tags</a>
                            </li>
                            @if(Auth()->user()->isClient())

                            <li class="list-group-item">
                                <a href="#">Users</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="#">Create a user</a>
                                    </li>

                                    <li class="list-group-item">
                                    <a href="#">Settings</a>
                                    </li>
                            @endif

                      <li class="list-group-item">
                        <a href="#">All Posts</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#">All trashed posts</a>
                            </li>
                      <li class="list-group-item">
                      <a href="#">Create a Post</a>
                      </li>
                      </ul>
                   </div>

                  @endif
                   {{-- <div class="col-lg-8">
                   @yield('content')
                   </div> --}}

