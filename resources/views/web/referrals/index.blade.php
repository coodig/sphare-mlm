@extends('layouts.app') {{-- (या आपका मुख्य लेआउट) --}}

@section('title', 'My Referrals')

@section('content')
<div class="p-6 md:p-10">

    <h1 class="text-3xl font-bold text-gray-800 mb-2">My Direct Referrals</h1>
    <p class="text-gray-600 mb-8">
        This is a list of all members you have personally sponsored.
    </p>

    <div class="bg-white p-6 rounded-2xl shadow-lg border border-gray-100">

        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            User ID
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Username
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Registration Date
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Status
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">

                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                            101
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                            dummy_user_1
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            user1@example.com
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            22 Oct, 2025
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                Active
                            </span>
                        </td>
                    </tr>

                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                            102
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                            test_member
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            test@example.com
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            20 Oct, 2025
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                             <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                Inactive
                            </span>
                        </td>
                    </tr>

                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                            103
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                            jane_doe
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            jane@example.com
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            18 Oct, 2025
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                Active
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                            103
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                            jane_doe
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            jane@example.com
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            18 Oct, 2025
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                Active
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                            103
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                            jane_doe
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            jane@example.com
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            18 Oct, 2025
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                Active
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                            103
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                            jane_doe
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            jane@example.com
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            18 Oct, 2025
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                Active
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                            103
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                            jane_doe
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            jane@example.com
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            18 Oct, 2025
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                Active
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                            103
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                            jane_doe
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            jane@example.com
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            18 Oct, 2025
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                Active
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                            103
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                            jane_doe
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            jane@example.com
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            18 Oct, 2025
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                Active
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                            103
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                            jane_doe
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            jane@example.com
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            18 Oct, 2025
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                Active
                            </span>
                        </td>
                    </tr>

                    {{--
                    <tr>
                        <td colspan="5" class="px-6 py-12 text-center text-gray-500">
                            You have not referred any users yet.
                        </td>
                    </tr>
                    --}}

                    {{-- Loop through each referral --}}
                    {{-- @forelse ($referrals as $referral)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                {{ $referral->id }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                {{ $referral->username }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $referral->email }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $referral->created_at->format('d M, Y') }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm">
                                @if ($referral->status_id == 1)
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        Active
                                    </span>
                                @else
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                        Inactive
                                    </span>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-6 py-12 text-center text-gray-500">
                                You have not referred any users yet.
                            </td>
                        </tr>
                    @endforelse --}}

                </tbody>
            </table>
        </div>

        <div class="mt-6">
            refereals link
            {{-- {{ $referrals->links() }} --}}
        </div>

    </div>
</div>
@endsection
