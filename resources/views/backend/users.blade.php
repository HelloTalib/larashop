@extends('backend.layout.header')

@section('content')
<main class="main-content">
    <header class="header">
        <button class="toggle-sidebar">☰</button>

        <div class="search-bar">
            <input type="text" placeholder="Search users...">
        </div>

        <div class="header-actions">
            <div class="notification">
                🔔
                <span class="notification-badge">3</span>
            </div>

            <div class="user-profile">
                <div class="user-avatar">
                    <img src="https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Admin User">
                </div>
                <span>Admin User</span>
            </div>
        </div>
    </header>

    <div class="page-header">
        <h1 class="page-title">Users</h1>
        <div class="page-actions">
            <button class="btn btn-outline">Export</button>
            <button class="btn btn-primary" onclick="window.location.href='{{ route('add-user') }}'">+ Add User</button>
        </div>
    </div>

    <div class="filter-bar">
        <div class="filter-item">
            <label for="status-filter">Status:</label>
            <select id="status-filter">
                <option value="">All Status</option>
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
            </select>
        </div>

        <div class="filter-item">
            <label for="role-filter">Role:</label>
            <select id="role-filter">
                <option value="">All Roles</option>
                <option value="admin">Admin</option>
                <option value="manager">Manager</option>
                <option value="customer">Customer</option>
            </select>
        </div>

        <div class="filter-item">
            <label for="date-filter">Registration Date:</label>
            <input type="date" id="date-from">
            <span style="margin: 0 0.5rem;">to</span>
            <input type="date" id="date-to">
        </div>

        <button class="btn btn-primary">Apply Filters</button>
        <button class="btn btn-outline">Reset</button>
    </div>

    <div class="content-card">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th><input type="checkbox"></th>
                        <th>User</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Last Login</th>
                        <th>Registered</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>
                            <div class="user-item">
                                <div class="user-avatar">
                                    <img src="https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="John Doe">
                                </div>
                                <div class="user-info">
                                    <h4>John Doe</h4>
                                    <p>Administrator</p>
                                </div>
                            </div>
                        </td>
                        <td>john.doe@example.com</td>
                        <td>Admin</td>
                        <td>Today, 10:30 AM</td>
                        <td>Jun 15, 2022</td>
                        <td><span class="status active">Active</span></td>
                        <td>
                            <div class="action-buttons">
                                <div class="action-btn view">👁️</div>
                                <div class="action-btn edit">✏️</div>
                                <div class="action-btn delete">🗑️</div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>
                            <div class="user-item">
                                <div class="user-avatar">
                                    <img src="https://images.pexels.com/photos/774909/pexels-photo-774909.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Jane Smith">
                                </div>
                                <div class="user-info">
                                    <h4>Jane Smith</h4>
                                    <p>Manager</p>
                                </div>
                            </div>
                        </td>
                        <td>jane.smith@example.com</td>
                        <td>Manager</td>
                        <td>Yesterday, 3:45 PM</td>
                        <td>Aug 22, 2022</td>
                        <td><span class="status active">Active</span></td>
                        <td>
                            <div class="action-buttons">
                                <div class="action-btn view">👁️</div>
                                <div class="action-btn edit">✏️</div>
                                <div class="action-btn delete">🗑️</div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>
                            <div class="user-item">
                                <div class="user-avatar">
                                    <img src="https://images.pexels.com/photos/2182970/pexels-photo-2182970.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Mike Johnson">
                                </div>
                                <div class="user-info">
                                    <h4>Mike Johnson</h4>
                                    <p>Customer</p>
                                </div>
                            </div>
                        </td>
                        <td>mike.johnson@example.com</td>
                        <td>Customer</td>
                        <td>Jul 15, 2023</td>
                        <td>Oct 10, 2022</td>
                        <td><span class="status active">Active</span></td>
                        <td>
                            <div class="action-buttons">
                                <div class="action-btn view">👁️</div>
                                <div class="action-btn edit">✏️</div>
                                <div class="action-btn delete">🗑️</div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>
                            <div class="user-item">
                                <div class="user-avatar">
                                    <img src="https://images.pexels.com/photos/1239291/pexels-photo-1239291.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Sarah Williams">
                                </div>
                                <div class="user-info">
                                    <h4>Sarah Williams</h4>
                                    <p>Customer</p>
                                </div>
                            </div>
                        </td>
                        <td>sarah.williams@example.com</td>
                        <td>Customer</td>
                        <td>Jun 5, 2023</td>
                        <td>Nov 5, 2022</td>
                        <td><span class="status inactive">Inactive</span></td>
                        <td>
                            <div class="action-buttons">
                                <div class="action-btn view">👁️</div>
                                <div class="action-btn edit">✏️</div>
                                <div class="action-btn delete">🗑️</div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>
                            <div class="user-item">
                                <div class="user-avatar">
                                    <img src="https://images.pexels.com/photos/614810/pexels-photo-614810.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="David Brown">
                                </div>
                                <div class="user-info">
                                    <h4>David Brown</h4>
                                    <p>Manager</p>
                                </div>
                            </div>
                        </td>
                        <td>david.brown@example.com</td>
                        <td>Manager</td>
                        <td>Today, 9:15 AM</td>
                        <td>Jan 15, 2023</td>
                        <td><span class="status active">Active</span></td>
                        <td>
                            <div class="action-buttons">
                                <div class="action-btn view">👁️</div>
                                <div class="action-btn edit">✏️</div>
                                <div class="action-btn delete">🗑️</div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>
                            <div class="user-item">
                                <div class="user-avatar">
                                    <img src="https://images.pexels.com/photos/1036623/pexels-photo-1036623.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Emily Davis">
                                </div>
                                <div class="user-info">
                                    <h4>Emily Davis</h4>
                                    <p>Customer</p>
                                </div>
                            </div>
                        </td>
                        <td>emily.davis@example.com</td>
                        <td>Customer</td>
                        <td>Jul 8, 2023</td>
                        <td>Feb 8, 2023</td>
                        <td><span class="status active">Active</span></td>
                        <td>
                            <div class="action-buttons">
                                <div class="action-btn view">👁️</div>
                                <div class="action-btn edit">✏️</div>
                                <div class="action-btn delete">🗑️</div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="pagination">
            <button class="pagination-btn prev">←</button>
            <div class="pagination-pages">
                <button class="pagination-page active">1</button>
                <button class="pagination-page">2</button>
                <button class="pagination-page">3</button>
                <span class="pagination-ellipsis">...</span>
                <button class="pagination-page">10</button>
            </div>
            <button class="pagination-btn next">→</button>
        </div>
    </div>
</main>
@endsection
