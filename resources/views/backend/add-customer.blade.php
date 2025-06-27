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
        <h1 class="page-title">Add New Customer</h1>
        <div class="page-actions">
            <a href="{{ route('customers') }}" class="btn btn-outline">Cancel</a>
        </div>
    </div>

    <form>
        <div class="form-card">
            <div class="form-section">
                <h3>Customer Information</h3>

                <div class="avatar-upload">
                    <div class="avatar-preview">
                        <img src="https://images.pexels.com/photos/2379004/pexels-photo-2379004.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Customer Avatar">
                    </div>
                    <div class="avatar-controls">
                        <div class="file-input-wrapper">
                            <button class="btn btn-outline">Choose Image</button>
                            <input type="file" accept="image/*">
                        </div>
                        <button type="button" class="btn btn-outline">Remove</button>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="first-name">First Name*</label>
                        <input type="text" id="first-name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="last-name">Last Name*</label>
                        <input type="text" id="last-name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address*</label>
                        <input type="email" id="email" class="form-control" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="date-of-birth">Date of Birth</label>
                        <input type="date" id="date-of-birth" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select id="status" class="form-control">
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label>Gender</label>
                    <div style="display: flex; gap: 1rem;">
                        <div class="form-check">
                            <input type="radio" id="male" name="gender" value="male">
                            <label for="male">Male</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" id="female" name="gender" value="female">
                            <label for="female">Female</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" id="other" name="gender" value="other">
                            <label for="other">Other</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-section">
                <h3>Billing Address</h3>
                <div class="form-row">
                    <div class="form-group">
                        <label for="address-line1">Address Line 1*</label>
                        <input type="text" id="address-line1" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="address-line2">Address Line 2</label>
                        <input type="text" id="address-line2" class="form-control">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="city">City*</label>
                        <input type="text" id="city" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="state">State/Province*</label>
                        <input type="text" id="state" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="zip">ZIP/Postal Code*</label>
                        <input type="text" id="zip" class="form-control" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="country">Country*</label>
                    <select id="country" class="form-control" required>
                        <option value="">Select Country</option>
                        <option value="US">United States</option>
                        <option value="CA">Canada</option>
                        <option value="UK">United Kingdom</option>
                        <option value="AU">Australia</option>
                        <option value="DE">Germany</option>
                        <option value="FR">France</option>
                        <option value="JP">Japan</option>
                        <option value="IN">India</option>
                        <option value="CN">China</option>
                        <option value="BR">Brazil</option>
                    </select>
                </div>

                <div class="form-check">
                    <input type="checkbox" id="shipping-same" checked>
                    <label for="shipping-same">Shipping address same as billing address</label>
                </div>
            </div>

            <div class="form-section">
                <h3>Account Settings</h3>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" class="form-control">
                    <div class="form-text">Leave blank to keep current password</div>
                </div>

                <div class="form-group">
                    <label for="confirm-password">Confirm Password</label>
                    <input type="password" id="confirm-password" class="form-control">
                </div>

                <div class="form-group">
                    <label>Email Preferences</label>
                    <div class="form-check">
                        <input type="checkbox" id="newsletter" checked>
                        <label for="newsletter">Subscribe to newsletter</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" id="promotions" checked>
                        <label for="promotions">Receive promotional emails</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" id="order-updates" checked>
                        <label for="order-updates">Receive order updates</label>
                    </div>
                </div>
            </div>

            <div class="form-section">
                <h3>Notes</h3>
                <div class="form-group">
                    <label for="admin-notes">Admin Notes</label>
                    <textarea id="admin-notes" class="form-control" rows="4" placeholder="Add any notes about this customer (only visible to admin)"></textarea>
                </div>
            </div>

            <div class="form-actions">
                <a href="{{ route('customers') }}" class="btn btn-secondary">Cancel</a>
                <button type="submit" class="btn btn-primary">Save Customer</button>
            </div>
        </div>
    </form>
</main>
@endsection