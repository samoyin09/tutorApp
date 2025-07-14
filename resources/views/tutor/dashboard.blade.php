@extends('layouts.app')

@section('content')
<div class="flex min-h-screen bg-gray-100">
    <!-- Sidebar -->
    <aside class="w-64 bg-white shadow-lg hidden md:flex flex-col justify-between">
        <div>
            <div class="p-6 border-b">
                <h2 class="text-xl font-bold text-gray-800">Tutor Panel</h2>
                <p class="text-sm text-gray-500">Welcome back!</p>
            </div>
            <nav class="p-4 space-y-2">
                <a href="{{ route('tutor.dashboard') }}" class="flex items-center space-x-3 p-2 rounded-lg text-white bg-blue-600">
                    <span>🏠</span><span>Dashboard</span>
                </a>
                <a href="{{ route('tutor.performance') }}" class="flex items-center space-x-3 p-2 rounded-lg text-gray-700 hover:bg-blue-100">
                    <span>📊</span><span>Performance</span>
                </a>
                <a href="{{ route('tutor.prediction') }}" class="flex items-center space-x-3 p-2 rounded-lg text-gray-700 hover:bg-blue-100">
                    <span>🧠</span><span>Prediction</span>
                </a>
                <a href="{{ route('tutor.approvedStudents') }}" class="flex items-center space-x-3 p-2 rounded-lg text-gray-700 hover:bg-blue-100">
                    <span>👥</span><span>My Students</span>
                </a>
                <a href="{{ route('tutor.messages') }}" class="flex items-center space-x-3 p-2 rounded-lg text-gray-700 hover:bg-blue-100">
                    <span>💬</span><span>Messages</span>
                </a>
                <a href="{{ route('tutor.profile') }}" class="flex items-center space-x-3 p-2 rounded-lg text-gray-700 hover:bg-blue-100">
                    <span>👤</span><span>Profile</span>
                </a>
            </nav>
        </div>
        <div class="p-4 border-t">
            <a href="{{ route('logout') }}" class="flex items-center space-x-2 text-red-600 hover:text-red-800">
                <span>🚪</span><span>Logout</span>
            </a>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-6">
        <div class="mb-6 flex items-center justify-between">
            <div>
                <h1 class="text-2xl font-bold text-gray-800">Tutor Dashboard</h1>
                <p class="text-sm text-gray-500">Manage your tasks and students effectively.</p>
            </div>
            <div class="flex items-center space-x-4">
                <button class="relative text-gray-600 hover:text-gray-800">
                    🔔
                    <span class="absolute top-0 right-0 inline-flex items-center justify-center px-1 text-xs font-bold leading-none text-white bg-red-500 rounded-full">3</span>
                </button>
                <div class="text-gray-700 font-medium">Hello, {{ Auth::user()->name }}</div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Student Performance -->
            <a href="{{ route('tutor.performance') }}" class="bg-white rounded-2xl shadow p-5 hover:shadow-lg transition">
                <div class="flex items-center space-x-4">
                    <div class="bg-blue-100 p-3 rounded-full">
                        <span class="text-blue-600 text-xl">📊</span>
                    </div>
                    <div>
                        <h2 class="text-lg font-semibold text-gray-700">Student Performance</h2>
                        <p class="text-sm text-gray-500">Input and review student scores</p>
                    </div>
                </div>
            </a>

            <!-- Teaching Style Prediction -->
            <a href="{{ route('tutor.prediction') }}" class="bg-white rounded-2xl shadow p-5 hover:shadow-lg transition">
                <div class="flex items-center space-x-4">
                    <div class="bg-purple-100 p-3 rounded-full">
                        <span class="text-purple-600 text-xl">🧠</span>
                    </div>
                    <div>
                        <h2 class="text-lg font-semibold text-gray-700">Teaching Style Predictor</h2>
                        <p class="text-sm text-gray-500">Get AI-based teaching style insights</p>
                    </div>
                </div>
            </a>

            <!-- Approved Students -->
            <a href="{{ route('tutor.approvedStudents') }}" class="bg-white rounded-2xl shadow p-5 hover:shadow-lg transition">
                <div class="flex items-center space-x-4">
                    <div class="bg-green-100 p-3 rounded-full">
                        <span class="text-green-600 text-xl">👥</span>
                    </div>
                    <div>
                        <h2 class="text-lg font-semibold text-gray-700">My Students</h2>
                        <p class="text-sm text-gray-500">View and manage approved students</p>
                    </div>
                </div>
            </a>

            <!-- Messages -->
            <a href="{{ route('tutor.messages') }}" class="bg-white rounded-2xl shadow p-5 hover:shadow-lg transition">
                <div class="flex items-center space-x-4">
                    <div class="bg-yellow-100 p-3 rounded-full">
                        <span class="text-yellow-600 text-xl">💬</span>
                    </div>
                    <div>
                        <h2 class="text-lg font-semibold text-gray-700">Messages</h2>
                        <p class="text-sm text-gray-500">Chat with students</p>
                    </div>
                </div>
            </a>

            <!-- Schedule -->
            <a href="#" class="bg-white rounded-2xl shadow p-5 hover:shadow-lg transition">
                <div class="flex items-center space-x-4">
                    <div class="bg-red-100 p-3 rounded-full">
                        <span class="text-red-600 text-xl">🗕</span>
                    </div>
                    <div>
                        <h2 class="text-lg font-semibold text-gray-700">Class Schedule</h2>
                        <p class="text-sm text-gray-500">View upcoming lessons</p>
                    </div>
                </div>
            </a>

            <!-- Profile & Subjects -->
            <a href="{{ route('tutor.profile') }}" class="bg-white rounded-2xl shadow p-5 hover:shadow-lg transition">
                <div class="flex items-center space-x-4">
                    <div class="bg-indigo-100 p-3 rounded-full">
                        <span class="text-indigo-600 text-xl">👤</span>
                    </div>
                    <div>
                        <h2 class="text-lg font-semibold text-gray-700">Profile & Subjects</h2>
                        <p class="text-sm text-gray-500">Manage your profile and subjects</p>
                    </div>
                </div>
            </a>
        </div>
    </main>
</div>
@endsection
