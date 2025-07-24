  <aside class="main-sidebar sidebar-dark-primary elevation-4">

      <div class="sidebar">

          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                  <img src="{{ asset('assets/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                      alt="User Image">
              </div>
              <div class="info">
                  <a href="#" class="d-block">Mahendra sahu</a>
              </div>
          </div>


          <div class="form-inline">
              <div class="input-group" data-widget="sidebar-search">
                  <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                      aria-label="Search">
                  <div class="input-group-append">
                      <button class="btn btn-sidebar">
                          <i class="fas fa-search fa-fw"></i>
                      </button>
                  </div>
              </div>
          </div>
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">

                  <!-- Dashboard -->
                  <li class="nav-item">
                      <a href="{{ url('admin/dashboard') }}"
                          class="nav-link {{ request()->is('admin/dashboard') ? 'active' : '' }}">
                          <i class="nav-icon fas fa-tachometer-alt"></i>
                          <p>Dashboard</p>
                      </a>
                  </li>

                  <!-- Course Categories -->
                  <li class="nav-item has-treeview {{ request()->is('admin/users*') ? 'menu-open' : '' }}">
                      <a href="#" class="nav-link {{ request()->is('admin/users*') ? 'active' : '' }}">
                          <i class="nav-icon fas fa-user-graduate"></i>
                          <p>
                              Registered Users
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ url('admin/users') }}"
                                  class="nav-link {{ request()->is('admin/users') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>User List</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item has-treeview {{ request()->is('admin/categories*') ? 'menu-open' : '' }}">
                      <a href="#" class="nav-link {{ request()->is('admin/categories*') ? 'active' : '' }}">
                          <i class="nav-icon fas fa-folder"></i>
                          <p>
                              Course Categories
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ route('admin.categories.create') }}"
                                  class="nav-link {{ request()->is('admin/categories/create') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>New Category</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('admin.categories') }}"
                                  class="nav-link {{ request()->is('admin/categories') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Categories List</p>
                              </a>
                          </li>
                      </ul>
                  </li>

                  <!-- Courses -->
                  <li class="nav-item has-treeview {{ request()->is('admin/courses*') ? 'menu-open' : '' }}">
                      <a href="#" class="nav-link {{ request()->is('admin/courses*') ? 'active' : '' }}">
                          <i class="nav-icon fas fa-book-open"></i>
                          <p>
                              Courses
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ route('admin.courses.create') }}"
                                  class="nav-link {{ request()->is('admin/courses/create') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>New Course</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('admin.courses') }}"
                                  class="nav-link {{ request()->is('admin/courses') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Courses List</p>
                              </a>
                          </li>
                      </ul>
                  </li>

                  <!-- Chapters -->
                  <li class="nav-item has-treeview {{ request()->is('admin/chapter*') ? 'menu-open' : '' }}">
                      <a href="#" class="nav-link {{ request()->is('admin/chapter*') ? 'active' : '' }}">
                          <i class="nav-icon fas fa-book"></i>
                          <p>
                              Chapters
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ url('admin/chapter/create') }}"
                                  class="nav-link {{ request()->is('admin/chapter/create') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>New Chapter</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ url('admin/chapter') }}"
                                  class="nav-link {{ request()->is('admin/chapter') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Chapter List</p>
                              </a>
                          </li>
                      </ul>
                  </li>

                  <!-- Questions -->
                  <li class="nav-item has-treeview {{ request()->is('admin/question*') ? 'menu-open' : '' }}">
                      <a href="#" class="nav-link {{ request()->is('admin/question*') ? 'active' : '' }}">
                          <i class="nav-icon fas fa-clipboard-list"></i>
                          <p>
                              Questions
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ url('admin/question/create') }}"
                                  class="nav-link {{ request()->is('admin/question/create') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Add New Question</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ url('admin/question') }}"
                                  class="nav-link {{ request()->is('admin/question') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Questions List</p>
                              </a>
                          </li>
                      </ul>
                  </li>

                  <!-- Choices -->
                  <li class="nav-item has-treeview {{ request()->is('admin/choise*') ? 'menu-open' : '' }}">
                      <a href="#" class="nav-link {{ request()->is('admin/choise*') ? 'active' : '' }}">
                          <i class="nav-icon fas fa-check-square"></i>
                          <p>
                              Choices
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ url('admin/choise/create') }}"
                                  class="nav-link {{ request()->is('admin/choise/create') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Add New Choice</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ url('admin/choise') }}"
                                  class="nav-link {{ request()->is('admin/choise') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Choice List</p>
                              </a>
                          </li>
                      </ul>
                  </li>

                  <!-- Discounts -->
                  <li class="nav-item has-treeview {{ request()->is('admin/discount*') ? 'menu-open' : '' }}">
                      <a href="#" class="nav-link {{ request()->is('admin/discount*') ? 'active' : '' }}">
                          <i class="nav-icon fas fa-tags"></i>
                          <p>
                              Discounts
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ url('admin/discount/create') }}"
                                  class="nav-link {{ request()->is('admin/discount/create') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>New Discount</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ url('admin/discount') }}"
                                  class="nav-link {{ request()->is('admin/discount') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Discount List</p>
                              </a>
                          </li>
                      </ul>
                  </li>

                  <li class="nav-item has-treeview {{ request()->is('report-*') ? 'menu-open' : '' }}">
                      <a href="#" class="nav-link {{ request()->is('report-*') ? 'active' : '' }}">
                          <i class="nav-icon fas fa-chart-bar"></i>
                          <p>
                              Reports
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>

                      <ul class="nav nav-treeview">

                          {{-- 1️⃣ User Reports --}}
                          <li class="nav-item has-treeview {{ request()->is('report/user/*') ? 'menu-open' : '' }}">
                              <a href="#"
                                  class="nav-link {{ request()->is('report/user/*') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>
                                      User Reports
                                      <i class="fas fa-angle-left right"></i>
                                  </p>
                              </a>
                              <ul class="nav nav-treeview">
                                  <li class="nav-item">
                                      <a href="{{ url('report/user/total-registered') }}"
                                          class="nav-link {{ request()->is('report/user/total-registered') ? 'active' : '' }}">
                                          <i class="far fa-dot-circle nav-icon"></i>
                                          <p>Total Registered Users</p>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="{{ url('report/user/active-count') }}"
                                          class="nav-link {{ request()->is('report/user/active-count') ? 'active' : '' }}">
                                          <i class="far fa-dot-circle nav-icon"></i>
                                          <p>Active Users Count</p>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="{{ url('report/user/inactive-count') }}"
                                          class="nav-link {{ request()->is('report/user/inactive-count') ? 'active' : '' }}">
                                          <i class="far fa-dot-circle nav-icon"></i>
                                          <p>Inactive/Blocked Users Count</p>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="{{ url('report/user/new-users') }}"
                                          class="nav-link {{ request()->is('report/user/new-users') ? 'active' : '' }}">
                                          <i class="far fa-dot-circle nav-icon"></i>
                                          <p>New Users (This Month/Week/Today)</p>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="{{ url('report/user/by-role') }}"
                                          class="nav-link {{ request()->is('report/user/by-role') ? 'active' : '' }}">
                                          <i class="far fa-dot-circle nav-icon"></i>
                                          <p>Users by Role</p>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="{{ url('report/user/top-active') }}"
                                          class="nav-link {{ request()->is('report/user/top-active') ? 'active' : '' }}">
                                          <i class="far fa-dot-circle nav-icon"></i>
                                          <p>Top 5 Active Users</p>
                                      </a>
                                  </li>
                              </ul>
                          </li>

                          {{-- 2️⃣ Course Reports --}}
                          <li class="nav-item has-treeview {{ request()->is('report/course/*') ? 'menu-open' : '' }}">
                              <a href="#"
                                  class="nav-link {{ request()->is('report/course/*') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>
                                      Course Reports
                                      <i class="fas fa-angle-left right"></i>
                                  </p>
                              </a>
                              <ul class="nav nav-treeview">
                                  <li class="nav-item">
                                      <a href="{{ url('report/course/total') }}"
                                          class="nav-link {{ request()->is('report/course/total') ? 'active' : '' }}">
                                          <i class="far fa-dot-circle nav-icon"></i>
                                          <p>Total Courses</p>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="{{ url('report/course/active') }}"
                                          class="nav-link {{ request()->is('report/course/active') ? 'active' : '' }}">
                                          <i class="far fa-dot-circle nav-icon"></i>
                                          <p>Active Courses</p>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="{{ url('report/course/inactive') }}"
                                          class="nav-link {{ request()->is('report/course/inactive') ? 'active' : '' }}">
                                          <i class="far fa-dot-circle nav-icon"></i>
                                          <p>Inactive Courses</p>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="{{ url('report/course/most-enrolled') }}"
                                          class="nav-link {{ request()->is('report/course/most-enrolled') ? 'active' : '' }}">
                                          <i class="far fa-dot-circle nav-icon"></i>
                                          <p>Most Enrolled Courses</p>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="{{ url('report/course/enrollments') }}"
                                          class="nav-link {{ request()->is('report/course/enrollments') ? 'active' : '' }}">
                                          <i class="far fa-dot-circle nav-icon"></i>
                                          <p>Course Enrollments (Month/Week/Today)</p>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="{{ url('report/course/completion-rate') }}"
                                          class="nav-link {{ request()->is('report/course/completion-rate') ? 'active' : '' }}">
                                          <i class="far fa-dot-circle nav-icon"></i>
                                          <p>Course Completion Rate (%)</p>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="{{ url('report/course/top-popular') }}"
                                          class="nav-link {{ request()->is('report/course/top-popular') ? 'active' : '' }}">
                                          <i class="far fa-dot-circle nav-icon"></i>
                                          <p>Top 5 Popular Courses</p>
                                      </a>
                                  </li>
                              </ul>
                          </li>

                          {{-- 3️⃣ Quiz Reports --}}
                          <li class="nav-item has-treeview {{ request()->is('report/quiz/*') ? 'menu-open' : '' }}">
                              <a href="#"
                                  class="nav-link {{ request()->is('report/quiz/*') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>
                                      Quiz Reports
                                      <i class="fas fa-angle-left right"></i>
                                  </p>
                              </a>
                              <ul class="nav nav-treeview">
                                  <li class="nav-item">
                                      <a href="{{ url('report/quiz/total-created') }}"
                                          class="nav-link {{ request()->is('report/quiz/total-created') ? 'active' : '' }}">
                                          <i class="far fa-dot-circle nav-icon"></i>
                                          <p>Total Quizzes Created</p>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="{{ url('report/quiz/attempts') }}"
                                          class="nav-link {{ request()->is('report/quiz/attempts') ? 'active' : '' }}">
                                          <i class="far fa-dot-circle nav-icon"></i>
                                          <p>Quizzes Attempted (Today/Week)</p>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="{{ url('report/quiz/average-score') }}"
                                          class="nav-link {{ request()->is('report/quiz/average-score') ? 'active' : '' }}">
                                          <i class="far fa-dot-circle nav-icon"></i>
                                          <p>Average Quiz Score</p>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="{{ url('report/quiz/top-performers') }}"
                                          class="nav-link {{ request()->is('report/quiz/top-performers') ? 'active' : '' }}">
                                          <i class="far fa-dot-circle nav-icon"></i>
                                          <p>Top Performing Learners</p>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="{{ url('report/quiz/success-rate') }}"
                                          class="nav-link {{ request()->is('report/quiz/success-rate') ? 'active' : '' }}">
                                          <i class="far fa-dot-circle nav-icon"></i>
                                          <p>Quiz Attempt Success Rate (%)</p>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="{{ url('report/quiz/most-attempted') }}"
                                          class="nav-link {{ request()->is('report/quiz/most-attempted') ? 'active' : '' }}">
                                          <i class="far fa-dot-circle nav-icon"></i>
                                          <p>Most Attempted Quiz</p>
                                      </a>
                                  </li>
                              </ul>
                          </li>

                          {{-- 4️⃣ Revenue / Payment Reports --}}
                          <li
                              class="nav-item has-treeview {{ request()->is('report/revenue/*') ? 'menu-open' : '' }}">
                              <a href="#"
                                  class="nav-link {{ request()->is('report/revenue/*') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>
                                      Revenue Reports
                                      <i class="fas fa-angle-left right"></i>
                                  </p>
                              </a>
                              <ul class="nav nav-treeview">
                                  <li class="nav-item">
                                      <a href="{{ url('report/revenue/total-earnings') }}"
                                          class="nav-link {{ request()->is('report/revenue/total-earnings') ? 'active' : '' }}">
                                          <i class="far fa-dot-circle nav-icon"></i>
                                          <p>Total Earnings</p>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="{{ url('report/revenue/earnings-month') }}"
                                          class="nav-link {{ request()->is('report/revenue/earnings-month') ? 'active' : '' }}">
                                          <i class="far fa-dot-circle nav-icon"></i>
                                          <p>Earnings This Month/Week</p>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="{{ url('report/revenue/earnings-by-course') }}"
                                          class="nav-link {{ request()->is('report/revenue/earnings-by-course') ? 'active' : '' }}">
                                          <i class="far fa-dot-circle nav-icon"></i>
                                          <p>Earnings by Course</p>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="{{ url('report/revenue/pending-payments') }}"
                                          class="nav-link {{ request()->is('report/revenue/pending-payments') ? 'active' : '' }}">
                                          <i class="far fa-dot-circle nav-icon"></i>
                                          <p>Pending Payments</p>
                                      </a>
                                  </li>
                              </ul>
                          </li>

                          {{-- 5️⃣ Learning Progress Reports --}}
                          <li
                              class="nav-item has-treeview {{ request()->is('report/learning/*') ? 'menu-open' : '' }}">
                              <a href="#"
                                  class="nav-link {{ request()->is('report/learning/*') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>
                                      Learning Progress
                                      <i class="fas fa-angle-left right"></i>
                                  </p>
                              </a>
                              <ul class="nav nav-treeview">
                                  <li class="nav-item">
                                      <a href="{{ url('report/learning/average-completion') }}"
                                          class="nav-link {{ request()->is('report/learning/average-completion') ? 'active' : '' }}">
                                          <i class="far fa-dot-circle nav-icon"></i>
                                          <p>Average Course Completion %</p>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="{{ url('report/learning/completed-users') }}"
                                          class="nav-link {{ request()->is('report/learning/completed-users') ? 'active' : '' }}">
                                          <i class="far fa-dot-circle nav-icon"></i>
                                          <p>Users Completed All Courses</p>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="{{ url('report/learning/courses-in-progress') }}"
                                          class="nav-link {{ request()->is('report/learning/courses-in-progress') ? 'active' : '' }}">
                                          <i class="far fa-dot-circle nav-icon"></i>
                                          <p>Courses In Progress</p>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="{{ url('report/learning/dropout-rate') }}"
                                          class="nav-link {{ request()->is('report/learning/dropout-rate') ? 'active' : '' }}">
                                          <i class="far fa-dot-circle nav-icon"></i>
                                          <p>Course Dropout Rate</p>
                                      </a>
                                  </li>
                              </ul>
                          </li>

                          {{-- 6️⃣ Feedback & Rating Reports --}}
                          <li
                              class="nav-item has-treeview {{ request()->is('report/feedback/*') ? 'menu-open' : '' }}">
                              <a href="#"
                                  class="nav-link {{ request()->is('report/feedback/*') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>
                                      Feedback & Ratings
                                      <i class="fas fa-angle-left right"></i>
                                  </p>
                              </a>
                              <ul class="nav nav-treeview">
                                  <li class="nav-item">
                                      <a href="{{ url('report/feedback/total-received') }}"
                                          class="nav-link {{ request()->is('report/feedback/total-received') ? 'active' : '' }}">
                                          <i class="far fa-dot-circle nav-icon"></i>
                                          <p>Total Feedback Received</p>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="{{ url('report/feedback/average-rating') }}"
                                          class="nav-link {{ request()->is('report/feedback/average-rating') ? 'active' : '' }}">
                                          <i class="far fa-dot-circle nav-icon"></i>
                                          <p>Average Course Rating</p>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="{{ url('report/feedback/top-rated-courses') }}"
                                          class="nav-link {{ request()->is('report/feedback/top-rated-courses') ? 'active' : '' }}">
                                          <i class="far fa-dot-circle nav-icon"></i>
                                          <p>Top Rated Courses</p>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="{{ url('report/feedback/courses-needing-improvement') }}"
                                          class="nav-link {{ request()->is('report/feedback/courses-needing-improvement') ? 'active' : '' }}">
                                          <i class="far fa-dot-circle nav-icon"></i>
                                          <p>Courses Needing Improvement</p>
                                      </a>
                                  </li>
                              </ul>
                          </li>

                          {{-- 7️⃣ Attendance / Activity Log --}}
                          <li
                              class="nav-item has-treeview {{ request()->is('report/activity/*') ? 'menu-open' : '' }}">
                              <a href="#"
                                  class="nav-link {{ request()->is('report/activity/*') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>
                                      Attendance / Activity Log
                                      <i class="fas fa-angle-left right"></i>
                                  </p>
                              </a>
                              <ul class="nav nav-treeview">
                                  <li class="nav-item">
                                      <a href="{{ url('report/activity/last-login') }}"
                                          class="nav-link {{ request()->is('report/activity/last-login') ? 'active' : '' }}">
                                          <i class="far fa-dot-circle nav-icon"></i>
                                          <p>Last Login Report</p>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="{{ url('report/activity/daily-active-users') }}"
                                          class="nav-link {{ request()->is('report/activity/daily-active-users') ? 'active' : '' }}">
                                          <i class="far fa-dot-circle nav-icon"></i>
                                          <p>Daily Active Users</p>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="{{ url('report/activity/inactive-users') }}"
                                          class="nav-link {{ request()->is('report/activity/inactive-users') ? 'active' : '' }}">
                                          <i class="far fa-dot-circle nav-icon"></i>
                                          <p>Inactive Users for 7+ Days</p>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="{{ url('report/activity/login-history') }}"
                                          class="nav-link {{ request()->is('report/activity/login-history') ? 'active' : '' }}">
                                          <i class="far fa-dot-circle nav-icon"></i>
                                          <p>User Login History</p>
                                      </a>
                                  </li>
                              </ul>
                          </li>

                      </ul>
                  </li>


                  <!-- Payments -->
                  <li class="nav-item has-treeview {{ request()->is('payments-*') ? 'menu-open' : '' }}">
                      <a href="#" class="nav-link {{ request()->is('payments-*') ? 'active' : '' }}">
                          <i class="nav-icon fas fa-credit-card"></i>
                          <p>
                              Payments
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="payments-transactions.html" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Transactions</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="payments-refunds.html" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Refund Requests</p>
                              </a>
                          </li>
                      </ul>
                  </li>

                  <!-- Notifications -->
                  <li class="nav-item has-treeview {{ request()->is('notifications-*') ? 'menu-open' : '' }}">
                      <a href="#" class="nav-link {{ request()->is('notifications-*') ? 'active' : '' }}">
                          <i class="nav-icon fas fa-bell"></i>
                          <p>
                              Notifications
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="notifications-send.html" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Send Notifications</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="notifications-announcements.html" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>System Announcements</p>
                              </a>
                          </li>
                      </ul>
                  </li>

                  <!-- Settings -->
                  <li class="nav-item has-treeview {{ request()->is('settings-*') ? 'menu-open' : '' }}">
                      <a href="#" class="nav-link {{ request()->is('settings-*') ? 'active' : '' }}">
                          <i class="nav-icon fas fa-cogs"></i>
                          <p>
                              Settings
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="settings-site.html" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Site Settings</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="settings-payment.html" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Payment Settings</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="settings-certificate.html" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Certificate Settings</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="settings-email.html" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Email Templates</p>
                              </a>
                          </li>
                      </ul>
                  </li>

              </ul>
          </nav>



          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>
