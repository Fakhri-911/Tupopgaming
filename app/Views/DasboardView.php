<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tupop Gaming - Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Custom CSS */
        .sidebar {
            transition: all 0.3s ease;
        }
        .sidebar.collapsed {
            width: 80px;
        }
        .sidebar.collapsed .nav-text {
            display: none;
        }
        .sidebar.collapsed .logo-text {
            display: none;
        }
        .sidebar.collapsed .logo-icon {
            margin: 0 auto;
        }
        .main-content {
            transition: margin-left 0.3s ease;
        }
        .chart-container {
            height: 300px;
        }
        .active-tab {
            border-bottom: 3px solid #3b82f6;
            color: #3b82f6;
        }
        .modal {
            transition: opacity 0.3s ease, transform 0.3s ease;
        }
        .modal.hidden {
            opacity: 0;
            transform: scale(0.9);
            pointer-events: none;
        }
    </style>
</head>
<body class="bg-gray-100 font-sans">
    <!-- Sidebar -->
    <div class="sidebar fixed h-screen bg-blue-800 text-white w-64 flex flex-col">
        <div class="p-4 flex items-center">
            <div class="logo-icon mr-3">
                <i class="fas fa-gamepad text-2xl"></i>
            </div>
            <div class="logo-text font-bold text-xl">Tupop Gaming</div>
        </div>
        <div class="flex-grow overflow-y-auto">
            <nav class="mt-6">
                <div class="px-4 py-2 text-gray-300 uppercase text-xs font-semibold">Main</div>
                <a href="#" class="flex items-center px-4 py-3 text-white bg-blue-900">
                    <i class="fas fa-tachometer-alt mr-3"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
                <div class="px-4 py-2 text-gray-300 uppercase text-xs font-semibold mt-4">Content</div>
                <a href="#" class="flex items-center px-4 py-3 text-gray-200 hover:bg-blue-700 hover:text-white">
                    <i class="fas fa-image mr-3"></i>
                    <span class="nav-text">Banner Management</span>
                </a>
                <a href="#" class="flex items-center px-4 py-3 text-gray-200 hover:bg-blue-700 hover:text-white">
                    <i class="fas fa-gamepad mr-3"></i>
                    <span class="nav-text">Game Content</span>
                </a>
                <a href="#" class="flex items-center px-4 py-3 text-gray-200 hover:bg-blue-700 hover:text-white">
                    <i class="fas fa-newspaper mr-3"></i>
                    <span class="nav-text">News Content</span>
                </a>
                <a href="#" class="flex items-center px-4 py-3 text-gray-200 hover:bg-blue-700 hover:text-white">
                    <i class="fas fa-trophy mr-3"></i>
                    <span class="nav-text">Tournaments</span>
                </a>
                <div class="px-4 py-2 text-gray-300 uppercase text-xs font-semibold mt-4">Transactions</div>
                <a href="#" class="flex items-center px-4 py-3 text-gray-200 hover:bg-blue-700 hover:text-white">
                    <i class="fas fa-exchange-alt mr-3"></i>
                    <span class="nav-text">Transaction Recap</span>
                </a>
                <a href="#" class="flex items-center px-4 py-3 text-gray-200 hover:bg-blue-700 hover:text-white">
                    <i class="fas fa-history mr-3"></i>
                    <span class="nav-text">Transaction History</span>
                </a>
                <div class="px-4 py-2 text-gray-300 uppercase text-xs font-semibold mt-4">Settings</div>
                <a href="#" class="flex items-center px-4 py-3 text-gray-200 hover:bg-blue-700 hover:text-white">
                    <i class="fas fa-cog mr-3"></i>
                    <span class="nav-text">Settings</span>
                </a>
                <a href="#" class="flex items-center px-4 py-3 text-gray-200 hover:bg-blue-700 hover:text-white">
                    <i class="fas fa-user mr-3"></i>
                    <span class="nav-text">Admin Profile</span>
                </a>
            </nav>
        </div>
        <div class="p-4 border-t border-blue-700">
            <button onclick="toggleSidebar()" class="flex items-center text-gray-200 hover:text-white">
                <i class="fas fa-chevron-left mr-2"></i>
                <span class="nav-text">Collapse</span>
            </button>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-content ml-64">
        <!-- Top Navigation -->
        <header class="bg-white shadow-sm py-4 px-6 flex justify-between items-center">
            <div class="flex items-center">
                <button class="mr-4 text-gray-500 hover:text-gray-700 md:hidden" onclick="toggleMobileSidebar()">
                    <i class="fas fa-bars"></i>
                </button>
                <h1 class="text-xl font-semibold text-gray-800">Dashboard Overview</h1>
            </div>
            <div class="flex items-center space-x-4">
                <div class="relative">
                    <button class="text-gray-500 hover:text-gray-700">
                        <i class="fas fa-bell"></i>
                        <span class="absolute top-0 right-0 h-2 w-2 rounded-full bg-red-500"></span>
                    </button>
                </div>
                <div class="relative">
                    <button class="flex items-center text-gray-700 hover:text-blue-600">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="User" class="h-8 w-8 rounded-full mr-2">
                        <span>Admin</span>
                        <i class="fas fa-chevron-down ml-2 text-xs"></i>
                    </button>
                </div>
            </div>
        </header>

        <!-- Dashboard Content -->
        <main class="p-6">
            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
                <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500">Total Transactions</p>
                            <h3 class="text-2xl font-bold">1,254</h3>
                            <p class="text-green-500 text-sm mt-1"><i class="fas fa-arrow-up mr-1"></i> 12% from last month</p>
                        </div>
                        <div class="bg-blue-100 p-3 rounded-full">
                            <i class="fas fa-exchange-alt text-blue-600"></i>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500">Revenue</p>
                            <h3 class="text-2xl font-bold">$24,560</h3>
                            <p class="text-green-500 text-sm mt-1"><i class="fas fa-arrow-up mr-1"></i> 8% from last month</p>
                        </div>
                        <div class="bg-green-100 p-3 rounded-full">
                            <i class="fas fa-dollar-sign text-green-600"></i>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500">Active Games</p>
                            <h3 class="text-2xl font-bold">42</h3>
                            <p class="text-green-500 text-sm mt-1"><i class="fas fa-arrow-up mr-1"></i> 3 new this month</p>
                        </div>
                        <div class="bg-purple-100 p-3 rounded-full">
                            <i class="fas fa-gamepad text-purple-600"></i>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500">Active Tournaments</p>
                            <h3 class="text-2xl font-bold">5</h3>
                            <p class="text-red-500 text-sm mt-1"><i class="fas fa-arrow-down mr-1"></i> 2 ended last week</p>
                        </div>
                        <div class="bg-yellow-100 p-3 rounded-full">
                            <i class="fas fa-trophy text-yellow-600"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Charts Section -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
                <!-- Transaction Chart -->
                <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-lg font-semibold">Transaction Overview</h2>
                        <div class="flex space-x-2">
                            <button class="px-3 py-1 text-sm rounded-md bg-blue-100 text-blue-600">Weekly</button>
                            <button class="px-3 py-1 text-sm rounded-md text-gray-600 hover:bg-gray-100">Monthly</button>
                            <button class="px-3 py-1 text-sm rounded-md text-gray-600 hover:bg-gray-100">Yearly</button>
                        </div>
                    </div>
                    <div class="chart-container">
                        <canvas id="transactionChart"></canvas>
                    </div>
                </div>
                
                <!-- Revenue Chart -->
                <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-lg font-semibold">Revenue Overview</h2>
                        <div class="flex space-x-2">
                            <button class="px-3 py-1 text-sm rounded-md bg-blue-100 text-blue-600">Weekly</button>
                            <button class="px-3 py-1 text-sm rounded-md text-gray-600 hover:bg-gray-100">Monthly</button>
                            <button class="px-3 py-1 text-sm rounded-md text-gray-600 hover:bg-gray-100">Yearly</button>
                        </div>
                    </div>
                    <div class="chart-container">
                        <canvas id="revenueChart"></canvas>
                    </div>
                </div>
            </div>

            <!-- Recent Transactions -->
            <div class="bg-white rounded-lg shadow overflow-hidden mb-6">
                <div class="p-6 border-b border-gray-200">
                    <div class="flex justify-between items-center">
                        <h2 class="text-lg font-semibold">Recent Transactions</h2>
                        <button class="text-blue-600 hover:text-blue-800">View All</button>
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Game</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">User</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Amount</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">#TRX-78945</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <img src="https://via.placeholder.com/40" alt="Mobile Legends" class="h-8 w-8 rounded-full mr-2">
                                        <span class="text-sm font-medium">Mobile Legends</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">user123</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">$12.50</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-800">Completed</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2023-06-15</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <button class="text-blue-600 hover:text-blue-900">Details</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">#TRX-78944</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <img src="https://via.placeholder.com/40" alt="Free Fire" class="h-8 w-8 rounded-full mr-2">
                                        <span class="text-sm font-medium">Free Fire</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">gamefan99</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">$8.00</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-800">Completed</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2023-06-15</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <button class="text-blue-600 hover:text-blue-900">Details</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">#TRX-78943</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <img src="https://via.placeholder.com/40" alt="PUBG Mobile" class="h-8 w-8 rounded-full mr-2">
                                        <span class="text-sm font-medium">PUBG Mobile</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">shooterpro</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">$15.00</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 py-1 text-xs rounded-full bg-yellow-100 text-yellow-800">Pending</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2023-06-14</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <button class="text-blue-600 hover:text-blue-900">Details</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">#TRX-78942</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <img src="https://via.placeholder.com/40" alt="Valorant" class="h-8 w-8 rounded-full mr-2">
                                        <span class="text-sm font-medium">Valorant</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">valorantfan</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">$20.00</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 py-1 text-xs rounded-full bg-red-100 text-red-800">Failed</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2023-06-14</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <button class="text-blue-600 hover:text-blue-900">Details</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <button onclick="openModal('bannerModal')" class="bg-white rounded-lg shadow p-6 flex flex-col items-center justify-center hover:bg-blue-50 transition-colors">
                    <div class="bg-blue-100 p-4 rounded-full mb-3">
                        <i class="fas fa-image text-blue-600 text-xl"></i>
                    </div>
                    <h3 class="text-lg font-medium text-gray-800">Add New Banner</h3>
                    <p class="text-gray-500 text-sm text-center mt-1">Upload new promotional banners</p>
                </button>
                <button onclick="openModal('gameModal')" class="bg-white rounded-lg shadow p-6 flex flex-col items-center justify-center hover:bg-purple-50 transition-colors">
                    <div class="bg-purple-100 p-4 rounded-full mb-3">
                        <i class="fas fa-gamepad text-purple-600 text-xl"></i>
                    </div>
                    <h3 class="text-lg font-medium text-gray-800">Add New Game</h3>
                    <p class="text-gray-500 text-sm text-center mt-1">Add new game to the platform</p>
                </button>
                <button onclick="openModal('newsModal')" class="bg-white rounded-lg shadow p-6 flex flex-col items-center justify-center hover:bg-green-50 transition-colors">
                    <div class="bg-green-100 p-4 rounded-full mb-3">
                        <i class="fas fa-newspaper text-green-600 text-xl"></i>
                    </div>
                    <h3 class="text-lg font-medium text-gray-800">Post News</h3>
                    <p class="text-gray-500 text-sm text-center mt-1">Create new gaming news article</p>
                </button>
                <button onclick="openModal('tournamentModal')" class="bg-white rounded-lg shadow p-6 flex flex-col items-center justify-center hover:bg-yellow-50 transition-colors">
                    <div class="bg-yellow-100 p-4 rounded-full mb-3">
                        <i class="fas fa-trophy text-yellow-600 text-xl"></i>
                    </div>
                    <h3 class="text-lg font-medium text-gray-800">Create Tournament</h3>
                    <p class="text-gray-500 text-sm text-center mt-1">Setup new gaming tournament</p>
                </button>
            </div>
        </main>
    </div>

    <!-- Banner Modal -->
    <div id="bannerModal" class="modal fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
        <div class="bg-white rounded-lg shadow-xl w-full max-w-md">
            <div class="p-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-xl font-semibold">Add New Banner</h3>
                    <button onclick="closeModal('bannerModal')" class="text-gray-400 hover:text-gray-600">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <form>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="banner-title">Banner Title</label>
                        <input id="banner-title" type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="banner-image">Banner Image</label>
                        <div class="border-2 border-dashed border-gray-300 rounded-md p-4 text-center">
                            <div class="flex flex-col items-center justify-center">
                                <i class="fas fa-cloud-upload-alt text-3xl text-gray-400 mb-2"></i>
                                <p class="text-sm text-gray-500">Drag and drop your image here or click to browse</p>
                                <input id="banner-image" type="file" class="hidden">
                                <button type="button" class="mt-2 px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Select Image</button>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="banner-link">Link URL</label>
                        <input id="banner-link" type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="banner-status">Status</label>
                        <select id="banner-status" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>
                    <div class="flex justify-end space-x-3">
                        <button type="button" onclick="closeModal('bannerModal')" class="px-4 py-2 border border-gray-300 rounded-md hover:bg-gray-100">Cancel</button>
                        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Save Banner</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Game Modal -->
    <div id="gameModal" class="modal fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
        <div class="bg-white rounded-lg shadow-xl w-full max-w-md">
            <div class="p-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-xl font-semibold">Add New Game</h3>
                    <button onclick="closeModal('gameModal')" class="text-gray-400 hover:text-gray-600">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <form>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="game-name">Game Name</label>
                        <input id="game-name" type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="game-category">Category</label>
                        <select id="game-category" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="mobile">Mobile</option>
                            <option value="pc">PC</option>
                            <option value="console">Console</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="game-image">Game Image</label>
                        <div class="border-2 border-dashed border-gray-300 rounded-md p-4 text-center">
                            <div class="flex flex-col items-center justify-center">
                                <i class="fas fa-cloud-upload-alt text-3xl text-gray-400 mb-2"></i>
                                <p class="text-sm text-gray-500">Drag and drop your image here or click to browse</p>
                                <input id="game-image" type="file" class="hidden">
                                <button type="button" class="mt-2 px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Select Image</button>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="game-description">Description</label>
                        <textarea id="game-description" rows="3" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                    </div>
                    <div class="flex justify-end space-x-3">
                        <button type="button" onclick="closeModal('gameModal')" class="px-4 py-2 border border-gray-300 rounded-md hover:bg-gray-100">Cancel</button>
                        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Add Game</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- News Modal -->
    <div id="newsModal" class="modal fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
        <div class="bg-white rounded-lg shadow-xl w-full max-w-2xl">
            <div class="p-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-xl font-semibold">Create News Article</h3>
                    <button onclick="closeModal('newsModal')" class="text-gray-400 hover:text-gray-600">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <form>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="news-title">Title</label>
                        <input id="news-title" type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="news-category">Category</label>
                        <select id="news-category" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="updates">Game Updates</option>
                            <option value="events">Events</option>
                            <option value="tournaments">Tournaments</option>
                            <option value="tips">Tips & Tricks</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="news-image">Featured Image</label>
                        <div class="border-2 border-dashed border-gray-300 rounded-md p-4 text-center">
                            <div class="flex flex-col items-center justify-center">
                                <i class="fas fa-cloud-upload-alt text-3xl text-gray-400 mb-2"></i>
                                <p class="text-sm text-gray-500">Drag and drop your image here or click to browse</p>
                                <input id="news-image" type="file" class="hidden">
                                <button type="button" class="mt-2 px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Select Image</button>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="news-content">Content</label>
                        <textarea id="news-content" rows="8" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                    </div>
                    <div class="flex justify-end space-x-3">
                        <button type="button" onclick="closeModal('newsModal')" class="px-4 py-2 border border-gray-300 rounded-md hover:bg-gray-100">Cancel</button>
                        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Publish News</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Tournament Modal -->
    <div id="tournamentModal" class="modal fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
        <div class="bg-white rounded-lg shadow-xl w-full max-w-2xl">
            <div class="p-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-xl font-semibold">Create New Tournament</h3>
                    <button onclick="closeModal('tournamentModal')" class="text-gray-400 hover:text-gray-600">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <form>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="tournament-name">Tournament Name</label>
                        <input id="tournament-name" type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="tournament-game">Game</label>
                            <select id="tournament-game" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option value="mobile-legends">Mobile Legends</option>
                                <option value="free-fire">Free Fire</option>
                                <option value="pubg">PUBG Mobile</option>
                                <option value="valorant">Valorant</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="tournament-prize">Prize Pool</label>
                            <input id="tournament-prize" type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="e.g. $1,000">
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="tournament-start">Start Date</label>
                            <input id="tournament-start" type="date" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="tournament-end">End Date</label>
                            <input id="tournament-end" type="date" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="tournament-image">Tournament Banner</label>
                        <div class="border-2 border-dashed border-gray-300 rounded-md p-4 text-center">
                            <div class="flex flex-col items-center justify-center">
                                <i class="fas fa-cloud-upload-alt text-3xl text-gray-400 mb-2"></i>
                                <p class="text-sm text-gray-500">Drag and drop your image here or click to browse</p>
                                <input id="tournament-image" type="file" class="hidden">
                                <button type="button" class="mt-2 px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Select Image</button>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="tournament-rules">Rules & Details</label>
                        <textarea id="tournament-rules" rows="4" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                    </div>
                    <div class="flex justify-end space-x-3">
                        <button type="button" onclick="closeModal('tournamentModal')" class="px-4 py-2 border border-gray-300 rounded-md hover:bg-gray-100">Cancel</button>
                        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Create Tournament</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Toggle sidebar
        function toggleSidebar() {
            const sidebar = document.querySelector('.sidebar');
            const mainContent = document.querySelector('.main-content');
            sidebar.classList.toggle('collapsed');
            mainContent.classList.toggle('ml-64');
            mainContent.classList.toggle('ml-20');
        }

        // Toggle mobile sidebar
        function toggleMobileSidebar() {
            const sidebar = document.querySelector('.sidebar');
            sidebar.classList.toggle('hidden');
        }

        // Modal functions
        function openModal(modalId) {
            document.getElementById(modalId).classList.remove('hidden');
        }

        function closeModal(modalId) {
            document.getElementById(modalId).classList.add('hidden');
        }

        // Close modal when clicking outside
        window.onclick = function(event) {
            if (event.target.classList.contains('modal')) {
                event.target.classList.add('hidden');
            }
        }

        // Initialize charts
        document.addEventListener('DOMContentLoaded', function() {
            // Transaction Chart
            const transactionCtx = document.getElementById('transactionChart').getContext('2d');
            const transactionChart = new Chart(transactionCtx, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                    datasets: [{
                        label: 'Transactions',
                        data: [120, 190, 170, 220, 240, 280],
                        backgroundColor: 'rgba(59, 130, 246, 0.1)',
                        borderColor: 'rgba(59, 130, 246, 1)',
                        borderWidth: 2,
                        tension: 0.4,
                        fill: true
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

            // Revenue Chart
            const revenueCtx = document.getElementById('revenueChart').getContext('2d');
            const revenueChart = new Chart(revenueCtx, {
                type: 'bar',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                    datasets: [{
                        label: 'Revenue',
                        data: [2500, 3800, 4200, 5100, 5900, 6800],
                        backgroundColor: 'rgba(16, 185, 129, 0.7)',
                        borderColor: 'rgba(16, 185, 129, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        });
    </script>
</body>
</html>