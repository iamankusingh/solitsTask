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

            <button
                class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-500 transition-colors duration-300"
            >
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
                        <option value="male">Male</option>
                        <option value="female">FeMale</option>
                        <option value="other">Other</option>
                    </select>
                </div>

                <div class="flex flex-col">
                    <label for="name">Phone Numebr</label>
                    <input
                        type="number"
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
                        <option value="bsc">BSC</option>
                        <option value="msc">MSC</option>
                        <option value="phd">PHD</option>
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
                        class="p-2 bg-white text-xl rounded"
                    />
                    <input
                        type="submit"
                        value="Save"
                        name="submitBtn"
                        class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-500 transition-colors duration-300"
                    />
                </div>
            </form>

            <hr />

            <!-- student List -->
            <section
                class="p-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4"
            >
                <div class="p-2 bg-white rounded">
                    <p><span>Name</span>: John Doe</p>
                    <p><span>Date of birth</span>: 01-01-2000</p>
                    <p><span>Gender</span>: Male</p>
                    <p><span>Phone</span>: 1234567890</p>
                    <p><span>City</span>: Gandhidham</p>
                    <p><span>Course</span>: BSC</p>
                    <p><span>Joining year</span>: 2023</p>
                    <p><span>Roll no</span>: 45</p>
                    <div>
                        <button
                            class="px-4 py-1 bg-blue-600 text-white rounded"
                        >
                            Update
                        </button>
                        <button class="px-4 py-1 bg-red-600 text-white rounded">
                            Delete
                        </button>
                    </div>
                </div>

                <div class="p-2 bg-white rounded">
                    <p><span>Name</span>: John Doe</p>
                    <p><span>Date of birth</span>: 01-01-2000</p>
                    <p><span>Gender</span>: Male</p>
                    <p><span>Phone</span>: 1234567890</p>
                    <p><span>City</span>: Gandhidham</p>
                    <p><span>Course</span>: BSC</p>
                    <p><span>Joining year</span>: 2023</p>
                    <p><span>Roll no</span>: 45</p>
                    <div>
                        <button
                            class="px-4 py-1 bg-blue-600 text-white rounded"
                        >
                            Update
                        </button>
                        <button class="px-4 py-1 bg-red-600 text-white rounded">
                            Delete
                        </button>
                    </div>
                </div>

                <div class="p-2 bg-white rounded">
                    <p><span>Name</span>: John Doe</p>
                    <p><span>Date of birth</span>: 01-01-2000</p>
                    <p><span>Gender</span>: Male</p>
                    <p><span>Phone</span>: 1234567890</p>
                    <p><span>City</span>: Gandhidham</p>
                    <p><span>Course</span>: BSC</p>
                    <p><span>Joining year</span>: 2023</p>
                    <p><span>Roll no</span>: 45</p>
                    <div>
                        <button
                            class="px-4 py-1 bg-blue-600 text-white rounded"
                        >
                            Update
                        </button>
                        <button class="px-4 py-1 bg-red-600 text-white rounded">
                            Delete
                        </button>
                    </div>
                </div>

                <div class="p-2 bg-white rounded">
                    <p><span>Name</span>: John Doe</p>
                    <p><span>Date of birth</span>: 01-01-2000</p>
                    <p><span>Gender</span>: Male</p>
                    <p><span>Phone</span>: 1234567890</p>
                    <p><span>City</span>: Gandhidham</p>
                    <p><span>Course</span>: BSC</p>
                    <p><span>Joining year</span>: 2023</p>
                    <p><span>Roll no</span>: 45</p>
                    <div>
                        <button
                            class="px-4 py-1 bg-blue-600 text-white rounded"
                        >
                            Update
                        </button>
                        <button class="px-4 py-1 bg-red-600 text-white rounded">
                            Delete
                        </button>
                    </div>
                </div>

                <div class="p-2 bg-white rounded">
                    <p><span>Name</span>: John Doe</p>
                    <p><span>Date of birth</span>: 01-01-2000</p>
                    <p><span>Gender</span>: Male</p>
                    <p><span>Phone</span>: 1234567890</p>
                    <p><span>City</span>: Gandhidham</p>
                    <p><span>Course</span>: BSC</p>
                    <p><span>Joining year</span>: 2023</p>
                    <p><span>Roll no</span>: 45</p>
                    <div>
                        <button
                            class="px-4 py-1 bg-blue-600 text-white rounded"
                        >
                            Update
                        </button>
                        <button class="px-4 py-1 bg-red-600 text-white rounded">
                            Delete
                        </button>
                    </div>
                </div>
            </section>
        </main>
    </body>
</html>
