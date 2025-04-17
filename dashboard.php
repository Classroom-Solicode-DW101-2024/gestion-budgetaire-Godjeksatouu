<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction Management System</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>

    </style>
</head>
<body>
    <div class="container-fluid py-4">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-2">
                <div class="sidebar">
                    <div class="user-profile">
                        <img src="/api/placeholder/40/40" alt="User Avatar" class="user-avatar">
                        <div class="user-info">
                            <div class="fw-bold">@imrgess</div>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <div class="fw-bold text-muted small mb-2">Type</div>
                        <div class="sidebar-item active">
                            <i class="fas fa-exchange-alt sidebar-icon"></i> Transactions
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <div class="sidebar-item">
                            <i class="fas fa-plus sidebar-icon"></i> Add Transaction
                        </div>
                        <div class="sidebar-item">
                            <i class="fas fa-wallet sidebar-icon"></i> Accounts
                        </div>
                        <div class="sidebar-item">
                            <i class="fas fa-tag sidebar-icon"></i> Categories
                        </div>
                        <div class="sidebar-item">
                            <i class="fas fa-clock sidebar-icon"></i> Recent
                        </div>
                        <div class="sidebar-item">
                            <i class="fas fa-star sidebar-icon"></i> Favorites
                        </div>
                        <div class="sidebar-item">
                            <i class="fas fa-cog sidebar-icon"></i> Settings
                        </div>
                    </div>
                    
                    <div class="mt-auto pt-5">
                        <div class="sidebar-item">
                            <i class="fas fa-question-circle sidebar-icon"></i> Help
                        </div>
                        <div class="sidebar-item">
                            <i class="fas fa-sign-out-alt sidebar-icon"></i> Logout
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Main Content -->
            <div class="col-md-10">
                <div class="main-container">
                    <!-- Header -->
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h2>Transaction Management</h2>
                        <div>
                            <button class="btn btn-outline-secondary me-2">
                                <i class="fas fa-pencil-alt"></i> Edit
                            </button>
                            <button class="btn btn-primary">
                                <i class="fas fa-upload"></i> Upload
                            </button>
                        </div>
                    </div>
                    
                    <!-- Content Area -->
                    <div class="row">
                        <!-- Add Transaction Section -->
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mb-3">Add Transaction</h5>
                                    <form id="transactionForm">
                                        <div class="mb-3">
                                            <input type="text" class="form-control" placeholder="Transaction Title" required>
                                        </div>
                                        
                                        <div class="mb-3">
                                            <label class="form-label">Transaction Type</label>
                                            <div class="d-flex">
                                                <div class="form-check me-3">
                                                    <input class="form-check-input" type="radio" name="transactionType" id="expense" checked>
                                                    <label class="form-check-label" for="expense">
                                                        Expense
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="transactionType" id="income">
                                                    <label class="form-check-label" for="income">
                                                        Income
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="mb-3">
                                            <label class="form-label">Amount</label>
                                            <div class="input-group">
                                                <span class="input-group-text">$</span>
                                                <input type="number" step="0.01" class="form-control" required>
                                            </div>
                                        </div>
                                        
                                        <div class="mb-3">
                                            <label class="form-label">Category</label>
                                            <select class="form-select">
                                                <option selected>Select category</option>
                                                <option>Food & Dining</option>
                                                <option>Transportation</option>
                                                <option>Entertainment</option>
                                                <option>Utilities</option>
                                                <option>Shopping</option>
                                                <option>Salary</option>
                                                <option>Other</option>
                                            </select>
                                        </div>
                                        
                                        <div class="mb-3">
                                            <label class="form-label">Description</label>
                                            <textarea class="form-control" rows="2"></textarea>
                                        </div>
                                        
                                        <div class="mb-3">
                                            <label class="form-label">Date</label>
                                            <input type="date" class="form-control" required>
                                        </div>
                                        
                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-primary">Add Transaction</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Transaction History Section -->
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mb-3">Transaction History</h5>
                                    
                                    <!-- Filters -->
                                    <div class="filter-section mb-3">
                                        <select class="form-select w-auto">
                                            <option selected>All Years</option>
                                            <option>2025</option>
                                            <option>2024</option>
                                            <option>2023</option>
                                        </select>
                                        
                                        <select class="form-select w-auto">
                                            <option selected>All Months</option>
                                            <option>January</option>
                                            <option>February</option>
                                            <option>March</option>
                                            <option>April</option>
                                            <option>May</option>
                                            <option>June</option>
                                            <option>July</option>
                                            <option>August</option>
                                            <option>September</option>
                                            <option>October</option>
                                            <option>November</option>
                                            <option>December</option>
                                        </select>
                                        
                                        <select class="form-select w-auto">
                                            <option selected>All Types</option>
                                            <option>Expense</option>
                                            <option>Income</option>
                                        </select>
                                    </div>
                                    
                                    <!-- Transaction Table -->
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th><input type="checkbox" class="form-check-input"></th>
                                                    <th>Date <i class="fas fa-sort"></i></th>
                                                    <th>Title</th>
                                                    <th>Category</th>
                                                    <th>Amount</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="transaction-row">
                                                    <td><input type="checkbox" class="form-check-input"></td>
                                                    <td>2025-04-15</td>
                                                    <td>Grocery Shopping</td>
                                                    <td><span class="badge bg-info">Food</span></td>
                                                    <td class="text-danger">-$125.50</td>
                                                    <td>
                                                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                                                        <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
                                                    </td>
                                                </tr>
                                                <tr class="transaction-row">
                                                    <td><input type="checkbox" class="form-check-input"></td>
                                                    <td>2025-04-12</td>
                                                    <td>Monthly Salary</td>
                                                    <td><span class="badge bg-success">Income</span></td>
                                                    <td class="text-success">+$3,500.00</td>
                                                    <td>
                                                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                                                        <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
                                                    </td>
                                                </tr>
                                                <tr class="transaction-row">
                                                    <td><input type="checkbox" class="form-check-input"></td>
                                                    <td>2025-04-10</td>
                                                    <td>Internet Bill</td>
                                                    <td><span class="badge bg-warning">Utilities</span></td>
                                                    <td class="text-danger">-$65.99</td>
                                                    <td>
                                                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                                                        <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
                                                    </td>
                                                </tr>
                                                <tr class="transaction-row">
                                                    <td><input type="checkbox" class="form-check-input"></td>
                                                    <td>2025-04-05</td>
                                                    <td>Restaurant Dinner</td>
                                                    <td><span class="badge bg-info">Food</span></td>
                                                    <td class="text-danger">-$78.25</td>
                                                    <td>
                                                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                                                        <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
                                                    </td>
                                                </tr>
                                                <tr class="transaction-row">
                                                    <td><input type="checkbox" class="form-check-input"></td>
                                                    <td>2025-04-02</td>
                                                    <td>Freelance Project</td>
                                                    <td><span class="badge bg-success">Income</span></td>
                                                    <td class="text-success">+$850.00</td>
                                                    <td>
                                                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                                                        <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    
                                    <!-- Pagination -->
                                    <nav>
                                        <ul class="pagination justify-content-center">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                                            </li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">Next</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Edit Transaction Modal -->
                    <div class="modal fade" id="editTransactionModal" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Edit Transaction</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form id="editTransactionForm">
                                        <div class="mb-3">
                                            <input type="text" class="form-control" id="editTitle" placeholder="Transaction Title" required>
                                        </div>
                                        
                                        <div class="mb-3">
                                            <label class="form-label">Transaction Type</label>
                                            <div class="d-flex">
                                                <div class="form-check me-3">
                                                    <input class="form-check-input" type="radio" name="editTransactionType" id="editExpense" checked>
                                                    <label class="form-check-label" for="editExpense">
                                                        Expense
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="editTransactionType" id="editIncome">
                                                    <label class="form-check-label" for="editIncome">
                                                        Income
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="mb-3">
                                            <label class="form-label">Amount</label>
                                            <div class="input-group">
                                                <span class="input-group-text">$</span>
                                                <input type="number" step="0.01" class="form-control" id="editAmount" required>
                                            </div>
                                        </div>
                                        
                                        <div class="mb-3">
                                            <label class="form-label">Category</label>
                                            <select class="form-select" id="editCategory">
                                                <option>Food & Dining</option>
                                                <option>Transportation</option>
                                                <option>Entertainment</option>
                                                <option>Utilities</option>
                                                <option>Shopping</option>
                                                <option>Salary</option>
                                                <option>Other</option>
                                            </select>
                                        </div>
                                        
                                        <div class="mb-3">
                                            <label class="form-label">Description</label>
                                            <textarea class="form-control" id="editDescription" rows="2"></textarea>
                                        </div>
                                        
                                        <div class="mb-3">
                                            <label class="form-label">Date</label>
                                            <input type="date" class="form-control" id="editDate" required>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-primary" id="saveEditBtn">Save Changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Delete Confirmation Modal -->
                    <div class="modal fade" id="deleteConfirmModal" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Confirm Delete</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Are you sure you want to delete this transaction? This action cannot be undone.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>