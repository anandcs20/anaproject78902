@extends('layouts.admin')

@section('content')
    <div class="card p-0">
        <div
             class="lg:min-h-[calc(100vh_-_theme('spacing.header')_*_1.4)] xl:min-h-[calc(100vh_-_theme('spacing.header')_*_1.6)]">
            <div
                 class="flex flex-col gap-2 sm:flex-center-between sm:flex-row px-4 py-5 sm:p-7 bg-gray-200/30 dark:bg-dark-card-shade">
                <div>
                    <h6 class="card-title">User list</h6>
                    <p class="card-description">All Users Here</p>
                </div>
                <a href="#"
                   class="btn b-solid btn-primary-solid"
                   data-modal-target="editModal"
                   data-modal-toggle="editModal">Add User</a>
            </div>
            <!-- Start All Language List Table -->
            <div class="p-3 sm:p-4">
                <div class="overflow-x-auto scrollbar-table">
                    <table
                           class="table-auto w-full whitespace-nowrap text-left text-gray-500 dark:text-dark-text leading-none">
                        <thead class="border-b border-gray-200 dark:border-dark-border font-semibold">
                            <tr>
                                <th class="px-1.5 py-2">{{ __('messages.name') }}</th>
                                <th class="px-1.5 py-2">{{ __('messages.email_address') }}</th>
                                <th class="px-1.5 py-2">{{ __('messages.created_at') }}</th>
                                <th class="px-1.5 py-2">{{ __('messages.updated_at') }}</th>
                                <th class="px-1.5 py-2">{{ __('messages.action') }}</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 dark:divide-dark-border pt-2">
                            @foreach ($users as $user)
                                <tr
                                    class="hover:bg-primary-200/50 dark:hover:bg-dark-icon hover:text-gray-500 dark:hover:text-white">
                                    <td class="px-1.5 py-2">{{ $user->name }}</td>
                                    <td class="px-1.5 py-2">{{ $user->email }}</td>
                                    <td class="px-1.5 py-2">{{ $user->created_at->diffForHumans() }}</td>
                                    <td class="px-1.5 py-2">{{ $user->updated_at->diffForHumans() }}</td>
                                    <td class="px-1.5 py-2">
                                        <div class="flex items-center gap-1">
                                            <button class="btn-icon btn-primary-icon-light size-7"
                                                    data-modal-target="editModal"
                                                    data-modal-toggle="editModal">
                                                <i class="ri-edit-2-line text-inherit text-[13px]"></i>
                                            </button>
                                            <button class="btn-icon btn-danger-icon-light size-7"
                                                    data-modal-target="deleteModal"
                                                    data-modal-toggle="deleteModal">
                                                <i class="ri-delete-bin-line text-danger text-[13px]"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- End All Language List Table -->
        </div>
    </div>
    <div id="editModal"
         tabindex="-1"
         class="hidden fixed inset-0 z-modal flex-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="p-4 w-full max-w-lg max-h-full">
            <div class="relative bg-white dark:bg-dark-tooltip rounded-lg shadow dk-theme-card-square">
                <button type="button"
                        data-modal-hide="editModal"
                        class="absolute top-3 end-2.5 text-gray-500 dark:text-dark-text hover:bg-gray-200 dark:hover:bg-dark-icon rounded-lg size-8 flex-center dk-theme-card-square">
                    <i class="ri-close-line text-inherit text-xl leading-none"></i>
                </button>
                <div class="p-4 md:p-5">
                    <form action="#"
                          class="flex flex-col gap-4 mt-6">
                        <div>
                            <label class="form-label">Select Country *</label>
                            <select class="singleSelect"
                                    name="country">
                                <option selected
                                        disabled>Select Country</option>
                                <option value="US">United States</option>
                                <option value="CA">Canada</option>
                                <option value="GB">United Kingdom</option>
                                <option value="AU">Australia</option>
                                <option value="DE">Germany</option>
                                <option value="FR">France</option>
                            </select>
                        </div>
                        <div>
                            <label class="form-label">Select State *</label>
                            <select class="singleSelect"
                                    name="state">
                                <option selected
                                        disabled>Select State</option>
                                <option value="AL">Alabama</option>
                                <option value="AK">Alaska</option>
                                <option value="AZ">Arizona</option>
                                <option value="AR">Arkansas</option>
                                <option value="CA">California</option>
                                <option value="CO">Colorado</option>
                            </select>
                        </div>
                        <div>
                            <label for="cityName"
                                   class="form-label">City Name *</label>
                            <input type="text"
                                   id="cityName"
                                   class="form-input"
                                   placeholder="City Name"
                                   autocomplete="off"
                                   required>
                        </div>
                        <div class="flex justify-end">
                            <button type="submit"
                                    class="btn b-solid btn-primary-solid cursor-pointer shadow-sm">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Edit Modal -->
@endsection
