<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex items-center justify-center">
        <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-lg">
            <h2 class="text-3xl font-semibold text-center text-gray-800 mb-6">Create an Account</h2>
            <!-- Success or Error Message -->
            @if(session('status'))
                <div class="mb-4 text-center text-white py-2 px-4 rounded-lg bg-green-500">
                    {{ session('status') }}
                </div>
            @endif

            <!-- Registration Form -->
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Select Role -->
                <div class="mb-4">
                    <label for="role" class="block text-sm font-medium text-gray-700">Register As</label>
                    <select id="role" name="role" class="w-full px-4 py-2 mt-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" onchange="toggleFields()">
                        <option value="customer">Customer</option>
                        <option value="employee">Employee</option>
                    </select>
                </div>

                <!-- Customer Form Fields -->
                <div id="customer-fields" class="hidden">
                    <!-- Customer NIC -->
                    <div class="mb-4">
                        <label for="Cus_NIC" class="block text-sm font-medium text-gray-700">Customer NIC</label>
                        <input type="text" id="Cus_NIC" name="Cus_NIC" value="{{ old('Cus_NIC') }}" required class="w-full px-4 py-2 mt-2 border rounded-lg">
                    </div>
                    <!-- Customer Name -->
                    <div class="mb-4">
                        <label for="Cus_Name" class="block text-sm font-medium text-gray-700">Customer Name</label>
                        <input type="text" id="Cus_Name" name="Cus_Name" value="{{ old('Cus_Name') }}" required class="w-full px-4 py-2 mt-2 border rounded-lg">
                    </div>
                    <!-- Customer Phone -->
                    <div class="mb-4">
                        <label for="Cus_TP" class="block text-sm font-medium text-gray-700">Customer Phone</label>
                        <input type="text" id="Cus_TP" name="Cus_TP" value="{{ old('Cus_TP') }}" required class="w-full px-4 py-2 mt-2 border rounded-lg">
                    </div>
                </div>

                <!-- Employee Form Fields -->
                <div id="employee-fields" class="hidden">
                    <!-- Employee ID -->
                    <div class="mb-4">
                        <label for="Em_ID" class="block text-sm font-medium text-gray-700">Employee ID</label>
                        <input type="text" id="Em_ID" name="Em_ID" value="{{ old('Em_ID') }}" required class="w-full px-4 py-2 mt-2 border rounded-lg">
                    </div>
                    <!-- Employee NIC -->
                    <div class="mb-4">
                        <label for="Em_NIC" class="block text-sm font-medium text-gray-700">Employee NIC</label>
                        <input type="text" id="Em_NIC" name="Em_NIC" value="{{ old('Em_NIC') }}" required class="w-full px-4 py-2 mt-2 border rounded-lg">
                    </div>
                    <!-- Employee Name -->
                    <div class="mb-4">
                        <label for="Em_Name" class="block text-sm font-medium text-gray-700">Employee Name</label>
                        <input type="text" id="Em_Name" name="Em_Name" value="{{ old('Em_Name') }}" required class="w-full px-4 py-2 mt-2 border rounded-lg">
                    </div>
                    <!-- Employee Phone -->
                    <div class="mb-4">
                        <label for="Em_TP" class="block text-sm font-medium text-gray-700">Employee Phone</label>
                        <input type="text" id="Em_TP" name="Em_TP" value="{{ old('Em_TP') }}" required class="w-full px-4 py-2 mt-2 border rounded-lg">
                    </div>
                    <!-- Position -->
                    <div class="mb-4">
                        <label for="Position" class="block text-sm font-medium text-gray-700">Position</label>
                        <input type="text" id="Position" name="Position" value="{{ old('Position') }}" required class="w-full px-4 py-2 mt-2 border rounded-lg">
                    </div>
                    <!-- Station Name -->
                    <div class="mb-4">
                        <label for="Station_Name" class="block text-sm font-medium text-gray-700">Station Name</label>
                        <input type="text" id="Station_Name" name="Station_Name" value="{{ old('Station_Name') }}" required class="w-full px-4 py-2 mt-2 border rounded-lg">
                    </div>
                    <!-- Date of Birth -->
                    <div class="mb-4">
                        <label for="DOB" class="block text-sm font-medium text-gray-700">Date of Birth</label>
                        <input type="date" id="DOB" name="DOB" value="{{ old('DOB') }}" required class="w-full px-4 py-2 mt-2 border rounded-lg">
                    </div>
                    <!-- Age -->
                    <div class="mb-4">
                        <label for="age" class="block text-sm font-medium text-gray-700">Age</label>
                        <input type="number" id="age" name="age" value="{{ old('age') }}" required class="w-full px-4 py-2 mt-2 border rounded-lg">
                    </div>
                </div>

                <!-- Common Fields: Email, Password, and Confirmation -->
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required class="w-full px-4 py-2 mt-2 border rounded-lg">
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" id="password" name="password" required class="w-full px-4 py-2 mt-2 border rounded-lg">
                </div>

                <div class="mb-6">
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" required class="w-full px-4 py-2 mt-2 border rounded-lg">
                </div>

                <!-- Submit Button -->
                <button type="submit" class="w-full py-2 px-4 bg-blue-500 text-white font-semibold rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Register
                </button>
            </form>

            <!-- Navigation to Login Page -->
            <div class="mt-6 text-center">
                <p class="text-sm text-gray-600">
                    Already have an account? <a href="{{ route('login') }}" class="text-blue-500 hover:underline">Login here</a>
                </p>
            </div>
        </div>
    </div>

    <!-- JavaScript to toggle fields -->
    <script>
        function toggleFields() {
            const role = document.getElementById('role').value;
            if (role === 'customer') {
                document.getElementById('customer-fields').classList.remove('hidden');
                document.getElementById('employee-fields').classList.add('hidden');
            } else {
                document.getElementById('customer-fields').classList.add('hidden');
                document.getElementById('employee-fields').classList.remove('hidden');
            }
        }
        toggleFields(); // Default state
    </script>
</body>
</html>
