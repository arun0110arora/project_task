@extends('layouts.app')

@section('content')

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg project-form">
        <h1 class="heading">Create Project</h1>
        <form method="POST" action="">

            @csrf

            <div>
                <label class="block font-medium text-sm text-gray-700" for="name">
                    Project Name
                </label>
                <input
                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full"
                    id="name"
                    type="text"
                    name="project_name"
                    required="required"
                    autofocus="autofocus"
                />
            </div>

            <div class="flex items-center justify-end mt-4">
                <button
                    type="submit"
                    class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition ml-4"
                >
                    Create
                </button>
            </div>
        </form>
    </div>

@endsection