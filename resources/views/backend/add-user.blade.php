@extends('backend.layout.header')

@section('content')
<main class="main-content">
    <header class="header">
        <button class="toggle-sidebar">☰</button>

        <div class="search-bar">
            <input type="text" placeholder="Search...">
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
        <h1 class="page-title">Add New User</h1>
        <div class="page-actions">
            <button class="btn btn-outline" onclick="window.location.href='{{ route('users') }}'">Cancel</button>
            <button class="btn btn-primary">Save User</button>
        </div>
    </div>

    <div class="content-card">
        <form class="add-user-form">
            <div class="form-section">
                <h2 class="section-title">User Information</h2>

                <div class="form-row">
                    <div class="form-group">
                        <label for="first-name">First Name</label>
                        <input type="text" id="first-name" placeholder="Enter first name">
                    </div>

                    <div class="form-group">
                        <label for="last-name">Last Name</label>
                        <input type="text" id="last-name" placeholder="Enter last name">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" placeholder="Enter email address">
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" placeholder="Enter phone number">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="role">Role</label>
                        <select id="role">
                            <option value="">Select Role</option>
                            <option value="admin">Administrator</option>
                            <option value="manager">Manager</option>
                            <option value="customer">Customer</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="status">Status</label>
                        <select id="status">
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="form-section">
                <h2 class="section-title">Password</h2>

                <div class="form-row">
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" placeholder="Enter password">
                    </div>

                    <div class="form-group">
                        <label for="confirm-password">Confirm Password</label>
                        <input type="password" id="confirm-password" placeholder="Confirm password">
                    </div>
                </div>
            </div>

            <div class="form-section">
                <h2 class="section-title">Profile Picture</h2>

                <div class="form-row">
                    <div class="form-group full-width">
                        <div class="image-upload-container">
                            <div class="image-preview">
                                <img id="preview-image" src="https://via.placeholder.com/150" alt="Profile Preview">
                            </div>
                            <div class="upload-controls">
                                <label for="profile-image" class="btn btn-outline">Choose Image</label>
                                <input type="file" id="profile-image" accept="image/*" style="display: none;">
                                <p class="upload-hint">Recommended size: 300x300px, Max size: 2MB</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-section">
                <h2 class="section-title">Additional Information</h2>

                <div class="form-row">
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" id="address" placeholder="Enter address">
                    </div>

                    <div class="form-group">
                        <label for="city">City</label>
                        <input type="text" id="city" placeholder="Enter city">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="state">State/Province</label>
                        <input type="text" id="state" placeholder="Enter state or province">
                    </div>

                    <div class="form-group">
                        <label for="country">Country</label>
                        <select id="country">
                            <option value="">Select Country</option>
                            <option value="us">United States</option>
                            <option value="ca">Canada</option>
                            <option value="uk">United Kingdom</option>
                            <option value="au">Australia</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group full-width">
                        <label for="notes">Notes</label>
                        <textarea id="notes" rows="4" placeholder="Enter any additional notes about this user"></textarea>
                    </div>
                </div>
            </div>

            <div class="form-actions">
                <button type="button" class="btn btn-outline">Cancel</button>
                <button type="submit" class="btn btn-primary">Save User</button>
            </div>
        </form>
    </div>
</main>
@endsection
