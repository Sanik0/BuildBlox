@include('admin.partials.header')
<body>

    <button data-drawer-target="sidebar-multi-level-sidebar" data-drawer-toggle="sidebar-multi-level-sidebar" aria-controls="sidebar-multi-level-sidebar" type="button" class="text-heading bg-transparent box-border border border-transparent hover:bg-neutral-secondary-medium focus:ring-4 focus:ring-neutral-tertiary font-medium leading-5 rounded-base ms-3 mt-3 text-sm p-2 focus:outline-none inline-flex sm:hidden">
        <span class="sr-only">Open sidebar</span>
        <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h10" />
        </svg>
    </button>
    @include('admin.partials.sidebar')
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg">

            <!-- Stats Cards Row -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                <!-- Total Users Card -->
                <div class="flex flex-col items-start justify-between h-24 rounded-lg bg-white p-4 shadow">
                    <div class="flex items-center justify-between w-full">
                        <h5 class="text-sm font-medium text-gray-500">Total Users</h5>
                        <svg class="w-5 h-5 text-blue-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path>
                        </svg>
                    </div>
                    <div class="flex items-end justify-between w-full">
                        <p class="text-2xl font-bold text-gray-900">8,282</p>
                        <span class="text-xs font-medium text-green-600 flex items-center">
                            <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            12.5%
                        </span>
                    </div>
                </div>

                <!-- Revenue Card -->
                <div class="flex flex-col items-start justify-between h-24 rounded-lg bg-white p-4 shadow">
                    <div class="flex items-center justify-between w-full">
                        <h5 class="text-sm font-medium text-gray-500">Total Revenue</h5>
                        <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z"></path>
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div class="flex items-end justify-between w-full">
                        <p class="text-2xl font-bold text-gray-900">$54,239</p>
                        <span class="text-xs font-medium text-green-600 flex items-center">
                            <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            8.3%
                        </span>
                    </div>
                </div>

                <!-- Orders Card -->
                <div class="flex flex-col items-start justify-between h-24 rounded-lg bg-white p-4 shadow">
                    <div class="flex items-center justify-between w-full">
                        <h5 class="text-sm font-medium text-gray-500">Total Orders</h5>
                        <svg class="w-5 h-5 text-purple-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"></path>
                        </svg>
                    </div>
                    <div class="flex items-end justify-between w-full">
                        <p class="text-2xl font-bold text-gray-900">1,423</p>
                        <span class="text-xs font-medium text-red-600 flex items-center">
                            <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M14.707 10.293a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 111.414-1.414L9 12.586V5a1 1 0 012 0v7.586l2.293-2.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            3.1%
                        </span>
                    </div>
                </div>
            </div>

            <!-- Charts Row -->
            <div class="flex items-center justify-center rounded-lg bg-white mb-4 shadow">
                <div class="w-full p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h5 class="text-xl font-bold text-gray-900">Sales Overview</h5>
                        <div class="flex space-x-2">
                            <button class="px-3 py-1 text-xs font-medium text-blue-600 bg-blue-50 rounded-lg hover:bg-blue-100">7 Days</button>
                            <button class="px-3 py-1 text-xs font-medium text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-200">30 Days</button>
                            <button class="px-3 py-1 text-xs font-medium text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-200">90 Days</button>
                        </div>
                    </div>
                    <canvas id="salesChart" height="80"></canvas>
                </div>
            </div>

            <!-- 4 Cards Grid -->
            <div class="grid grid-cols-2 md:grid-cols-2 gap-4 mb-4">
                <!-- Conversion Rate -->
                <div class="flex flex-col items-start justify-center rounded-lg bg-white p-6 shadow">
                    <h5 class="text-lg font-bold text-gray-900 mb-4">Conversion Rate</h5>
                    <div class="flex items-center justify-center w-full">
                        <div class="text-center">
                            <p class="text-5xl font-bold text-blue-600">3.7%</p>
                            <p class="text-sm text-gray-500 mt-2">Last 30 days</p>
                            <div class="mt-4 flex items-center justify-center space-x-4">
                                <div class="text-center">
                                    <p class="text-xs text-gray-500">Visitors</p>
                                    <p class="text-lg font-bold text-gray-900">38,421</p>
                                </div>
                                <div class="text-center">
                                    <p class="text-xs text-gray-500">Conversions</p>
                                    <p class="text-lg font-bold text-gray-900">1,423</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Top Products -->
                <div class="flex flex-col items-start justify-start rounded-lg bg-white p-6 shadow">
                    <h5 class="text-lg font-bold text-gray-900 mb-4">Top Products</h5>
                    <div class="w-full space-y-3">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
                                    <span class="text-sm font-bold text-blue-600">1</span>
                                </div>
                                <div>
                                    <p class="text-sm font-semibold text-gray-900">iPhone 15 Pro</p>
                                    <p class="text-xs text-gray-500">342 sales</p>
                                </div>
                            </div>
                            <span class="text-sm font-bold text-gray-900">$340,200</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center">
                                    <span class="text-sm font-bold text-green-600">2</span>
                                </div>
                                <div>
                                    <p class="text-sm font-semibold text-gray-900">MacBook Air M3</p>
                                    <p class="text-xs text-gray-500">287 sales</p>
                                </div>
                            </div>
                            <span class="text-sm font-bold text-gray-900">$286,287</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center">
                                    <span class="text-sm font-bold text-purple-600">3</span>
                                </div>
                                <div>
                                    <p class="text-sm font-semibold text-gray-900">AirPods Pro 2</p>
                                    <p class="text-xs text-gray-500">521 sales</p>
                                </div>
                            </div>
                            <span class="text-sm font-bold text-gray-900">$129,729</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Sales Overview Chart
        const salesCtx = document.getElementById('salesChart').getContext('2d');
        new Chart(salesCtx, {
            type: 'line',
            data: {
                labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                datasets: [{
                    label: 'Sales',
                    data: [4200, 5100, 4800, 6200, 5800, 7100, 6800],
                    borderColor: 'rgb(59, 130, 246)',
                    backgroundColor: 'rgba(59, 130, 246, 0.1)',
                    tension: 0.4,
                    fill: true
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: true,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            callback: function(value) {
                                return '$' + value;
                            }
                        }
                    }
                }
            }
        });

        // Traffic Sources Chart
        const trafficCtx = document.getElementById('trafficChart').getContext('2d');
        new Chart(trafficCtx, {
            type: 'doughnut',
            data: {
                labels: ['Direct', 'Organic Search', 'Social Media', 'Referral'],
                datasets: [{
                    data: [35, 28, 22, 15],
                    backgroundColor: [
                        'rgb(59, 130, 246)',
                        'rgb(16, 185, 129)',
                        'rgb(139, 92, 246)',
                        'rgb(251, 146, 60)'
                    ]
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: true,
                plugins: {
                    legend: {
                        position: 'bottom'
                    }
                }
            }
        });

        // User Growth Chart
        const userGrowthCtx = document.getElementById('userGrowthChart').getContext('2d');
        new Chart(userGrowthCtx, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                datasets: [{
                    label: 'New Users',
                    data: [520, 640, 580, 720, 810, 920, 880, 1050, 1120, 980, 1200, 1340],
                    backgroundColor: 'rgba(59, 130, 246, 0.8)',
                    borderColor: 'rgb(59, 130, 246)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: true,
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
    </script>

</body>
<script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>

</html>