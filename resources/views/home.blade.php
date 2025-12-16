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

            <a href="{{ url('/') }}" class="inline-flex items-center justify-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                Refresh
            </a>
        </header>

        <main>
            <!-- student Form -->
            <form
                action="{{ isset($student) ? url('/student/'.$student->id) : url('/addstudent') }}"
                method="POST"
                class="p-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4"
            >
                @csrf
                @isset($student)
                    @method('PUT')
                @endisset
                <div class="flex flex-col">
                    <label for="name">Full Name</label>
                    <input
                        type="text"
                        name="name"
                        id="name"
                        required
                        value="{{ old('name', isset($student) ? $student->full_name : '') }}"
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
                        value="{{ old('dob', isset($student) ? $student->dob : '') }}"
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
                        <option value="Male" {{ (old('gender', isset($student) ? $student->gender : '') == 'Male') ? 'selected' : '' }}>Male</option>
                        <option value="Female" {{ (old('gender', isset($student) ? $student->gender : '') == 'Female') ? 'selected' : '' }}>Female</option>
                        <option value="Other" {{ (old('gender', isset($student) ? $student->gender : '') == 'Other') ? 'selected' : '' }}>Other</option>
                    </select>
                </div>

                <div class="flex flex-col">
                    <label for="name">Phone Numebr</label>
                    <input
                        type="phone"
                        name="phone"
                        id="phone"
                        required
                        value="{{ old('phone', isset($student) ? $student->phone : '') }}"
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
                        value="{{ old('city', isset($student) ? $student->city : '') }}"
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
                        <option value="BSC" {{ (old('course', isset($student) ? $student->course : '') == 'BSC') ? 'selected' : '' }}>BSC</option>
                        <option value="MSC" {{ (old('course', isset($student) ? $student->course : '') == 'MSC') ? 'selected' : '' }}>MSC</option>
                        <option value="PHD" {{ (old('course', isset($student) ? $student->course : '') == 'PHD') ? 'selected' : '' }}>PHD</option>
                    </select>
                </div>

                <div class="flex flex-col">
                    <label for="name">Joining Year</label>
                    <input
                        type="number"
                        name="joinyear"
                        id="joinYear"
                        required
                        value="{{ old('joinyear', isset($student) ? $student->joining_year : '') }}"
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
                        value="{{ old('rollno', isset($student) ? $student->roll_no : '') }}"
                        class="p-2 bg-white text-xl rounded"
                    />
                </div>

                <div>
                    <input
                        type="reset"
                        value="Clear all"
                        onclick="window.location='/'"
                        class="inline-flex items-center justify-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-600 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500"
                    />
                    <input
                        type="submit"
                        value="{{ isset($student) ? 'Update' : 'Save' }}"
                        name="submitBtn"
                        class="inline-flex items-center justify-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
                    />
                </div>
            </form>
            
            <hr />

            <!-- student List -->
            <section class="p-2 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                @foreach($students as $s)
                <div class="bg-white shadow overflow-hidden sm:rounded-lg border border-gray-200">
                    <dl>
                        <div class="bg-gray-100 px-4 py-1 grid grid-cols-3 gap-4">
                            <dt class="text-sm font-medium text-gray-500">ID</dt>
                            <dd class="mt-1 text-sm text-gray-900 col-span-2">{{ $s->id }}</dd>
                        </div>
                        
                        <div class="bg-white px-4 py-1 grid grid-cols-3 gap-4">
                            <dt class="text-sm font-medium text-gray-500">Name</dt>
                            <dd class="mt-1 text-sm text-gray-900 col-span-2">{{ $s->full_name }}</dd>
                        </div>

                        <div class="bg-gray-100 px-4 py-1 grid grid-cols-3 gap-4">
                            <dt class="text-sm font-medium text-gray-500">DOB</dt>
                            <dd class="mt-1 text-sm text-gray-900 col-span-2">{{ $s->dob }}</dd>
                        </div>
                        
                        <div class="bg-white px-4 py-1 grid grid-cols-3 gap-4">
                            <dt class="text-sm font-medium text-gray-500">Phone</dt>
                            <dd class="mt-1 text-sm text-gray-900 col-span-2">{{ $s->phone }}</dd>
                        </div>

                        <div class="bg-gray-100 px-4 py-1 grid grid-cols-3 gap-4">
                            <dt class="text-sm font-medium text-gray-500">City</dt>
                            <dd class="mt-1 text-sm text-gray-900 col-span-2">{{ $s->city }}</dd>
                        </div>
                        
                        <div class="bg-white px-4 py-1 grid grid-cols-3 gap-4">
                            <dt class="text-sm font-medium text-gray-500">Course</dt>
                            <dd class="mt-1 text-sm text-gray-900 col-span-2">{{ $s->course }}</dd>
                        </div>

                        <div class="bg-gray-100 px-4 py-1 grid grid-cols-3 gap-4">
                            <dt class="text-sm font-medium text-gray-500">Joining Year</dt>
                            <dd class="mt-1 text-sm text-gray-900 col-span-2">{{ $s->joining_year }}</dd>
                        </div>
                        
                        <div class="bg-white px-4 py-1 grid grid-cols-3 gap-4">
                            <dt class="text-sm font-medium text-gray-500">Roll No</dt>
                            <dd class="mt-1 text-sm text-gray-900 col-span-2">{{ $s->roll_no }}</dd>
                        </div>
                    </dl>
                
                    <div class="bg-white px-4 py-3 sm:px-6 flex flex-row-reverse gap-3 border-t border-gray-200">
                        <a href="{{ url('/student/'.$s->id.'/edit') }}" class="inline-flex items-center justify-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Update
                        </a>

                        <a href="{{ url('/delete/'.$s->id) }}" class="inline-flex items-center justify-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                            Delete
                        </a>
                    </div>
                </div>
                @endforeach
            </section>
        </main>
    </body>
</html>
