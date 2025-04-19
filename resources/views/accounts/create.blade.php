<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Account') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('accounts.store') }}">
                        @csrf

                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">{{ __('Account Name') }}</label>
                            <input type="text" id="name" name="name" required
                                   class="block w-full border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500"
                                   placeholder="Enter account name" value="{{ old('name') }}">
                            @error('name')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="description" class="block text-sm font-medium text-gray-700 mb-1">{{ __('Account Description') }}</label>
                            <textarea type="text" id="description" name="description" required
                                   class="block w-full border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500"
                                   value="{{ old('name') }}"></textarea>
                            @error('name')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="type" class="block text-sm font-medium text-gray-700 mb-1">{{ __('Account Type') }}</label>
                            <div class="flex">
                                <div class="flex items-center mr-4">
                                    <input type="radio" id="type_income" name="type" value="income" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" checked>
                                    <label for="type_income" class="ml-2 block text-sm text-gray-700">{{ __('Income') }}</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="radio" id="type_expense" name="type" value="expense" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                    <label for="type_expense" class="ml-2 block text-sm text-gray-700">{{ __('Expense') }}</label>
                                </div>
                            </div>
                            @error('type')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex justify-between">
                            <a href="{{ route('accounts.index') }}" class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold py-2 px-4 rounded">
                                {{ __('Cancel') }}
                            </a>
                            <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded">
                                {{ __('Save Account') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
