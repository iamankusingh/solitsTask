<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Student Management - Solits</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="bg-gray-100 text-black cursor-default">
        <header class="p-2 flex items-center justify-between bg-gray-200">
            <h1 class="text-3xl font-bold">Solits Collage</h1>

            <button type="button" class="inline-flex items-center justify-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                New Student
            </button>
        </header>

        <main>
            <!-- student Form -->
            <form
                action="addstudent"
                method="POST"
                class="p-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4"
            >
                @csrf
                <div class="flex flex-col">
                    <label for="name">Full Name</label>
                    <input
                        type="text"
                        name="name"
                        id="name"
                        required
                        class="p-2 bg-white text-xl rounded"
                    />
                </div>

                <div class="flex flex-col">
                    <label for="dob">Date of Birth</label>
                    <input
                        type="date"
                        name="dob"
                        id="dob"
                        required
                        class="p-2 bg-white text-xl rounded"
                    />
                </div>

                <div class="flex flex-col">
                    <label for="gender">Gender</label>
                    <select
                        name="gender"
                        id="gender"
                        required
                        class="p-2 bg-white text-xl rounded"
                    >
                        <option value="default" selected disabled>
                            Please select
                        </option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </div>

                <div class="flex flex-col">
                    <label for="name">Phone Numebr</label>
                    <input
                        type="phone"
                        name="phone"
                        id="phone"
                        required
                        class="p-2 bg-white text-xl rounded"
                    />
                </div>

                <div class="flex flex-col">
                    <label for="name">City</label>
                    <input
                        type="text"
                        name="city"
                        id="city"
                        required
                        class="p-2 bg-white text-xl rounded"
                    />
                </div>

                <div class="flex flex-col">
                    <label for="name">Course</label>
                    <select
                        name="course"
                        id="course"
                        required
                        class="p-2 bg-white text-xl rounded"
                    >
                        <option value="default" selected disabled>
                            Please select
                        </option>
                        <option value="BSC">BSC</option>
                        <option value="MSC">MSC</option>
                        <option value="PHD">PHD</option>
                    </select>
                </div>

                <div class="flex flex-col">
                    <label for="name">Joining Year</label>
                    <input
                        type="number"
                        name="joinyear"
                        id="joinYear"
                        required
                        class="p-2 bg-white text-xl rounded"
                    />
                </div>

                <div class="flex flex-col">
                    <label for="name">Roll No</label>
                    <input
                        type="number"
                        name="rollno"
                        id="rollNo"
                        required
                        class="p-2 bg-white text-xl rounded"
                    />
                </div>

                <div>
                    <input
                        type="reset"
                        value="Clear all"
                        class="inline-flex items-center justify-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-600 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500"
                    />
                    <input
                        type="submit"
                        value="Save"
                        name="submitBtn"
                        class="inline-flex items-center justify-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
                    />
                </div>
            </form>
            
            <hr />

            <!-- student List -->
            <section class="p-2 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                @foreach($students as $student)
                <div class="bg-white shadow overflow-hidden sm:rounded-lg border border-gray-200">
                    <dl>
                        <div class="bg-gray-100 px-4 py-1 grid grid-cols-3 gap-4">
                            <dt class="text-sm font-medium text-gray-500">ID</dt>
                            <dd class="mt-1 text-sm text-gray-900 col-span-2">{{ $student->id }}</dd>
                        </div>
                        
                        <div class="bg-white px-4 py-1 grid grid-cols-3 gap-4">
                            <dt class="text-sm font-medium text-gray-500">Name</dt>
                            <dd class="mt-1 text-sm text-gray-900 col-span-2">{{ $student->full_name }}</dd>
                        </div>

                        <div class="bg-gray-100 px-4 py-1 grid grid-cols-3 gap-4">
                            <dt class="text-sm font-medium text-gray-500">DOB</dt>
                            <dd class="mt-1 text-sm text-gray-900 col-span-2">{{ $student->dob }}</dd>
                        </div>
                        
                        <div class="bg-white px-4 py-1 grid grid-cols-3 gap-4">
                            <dt class="text-sm font-medium text-gray-500">Phone</dt>
                            <dd class="mt-1 text-sm text-gray-900 col-span-2">{{ $student->phone }}</dd>
                        </div>

                        <div class="bg-gray-100 px-4 py-1 grid grid-cols-3 gap-4">
                            <dt class="text-sm font-medium text-gray-500">City</dt>
                            <dd class="mt-1 text-sm text-gray-900 col-span-2">{{ $student->city }}</dd>
                        </div>
                        
                        <div class="bg-white px-4 py-1 grid grid-cols-3 gap-4">
                            <dt class="text-sm font-medium text-gray-500">Course</dt>
                            <dd class="mt-1 text-sm text-gray-900 col-span-2">{{ $student->course }}</dd>
                        </div>

                        <div class="bg-gray-100 px-4 py-1 grid grid-cols-3 gap-4">
                            <dt class="text-sm font-medium text-gray-500">Joining Year</dt>
                            <dd class="mt-1 text-sm text-gray-900 col-span-2">{{ $student->joining_year }}</dd>
                        </div>
                        
                        <div class="bg-white px-4 py-1 grid grid-cols-3 gap-4">
                            <dt class="text-sm font-medium text-gray-500">Roll No</dt>
                            <dd class="mt-1 text-sm text-gray-900 col-span-2">{{ $student->roll_no }}</dd>
                        </div>
                    </dl>
                
                    <div class="bg-white px-4 py-3 sm:px-6 flex flex-row-reverse gap-3 border-t border-gray-200">
                        <button type="button" class="inline-flex items-center justify-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Update
                        </button>
                        
                        <button type="button" class="inline-flex items-center justify-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                            Delete
                        </button>
                    </div>
                </div>
                @endforeach
            </section>
        </main>
    </body>
</html>
