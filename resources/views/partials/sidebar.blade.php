{{-- <aside class="w-64 bg-gray-800 text-white p-6 hidden md:block">
  <ul class="space-y-4">
    <li><a href="#" class="block hover:bg-gray-700 p-2 rounded">Dashboard</a></li>
    <li><a href="#" class="block hover:bg-gray-700 p-2 rounded">Members</a></li>
    <li><a href="#" class="block hover:bg-gray-700 p-2 rounded">Reports</a></li>
    <li><a href="#" class="block hover:bg-gray-700 p-2 rounded">Settings</a></li>
  </ul>
</aside> --}}


<aside class="w-64 bg-gray-800 text-gray-300 p-3 hidden md:flex flex-col">
    {{-- Logo/Brand Name --}}
    <div class="text-white text-2xl font-bold p-2 mb-2 text-center">
        Sphare<span class="text-blue-400">MLM</span>
    </div>

    {{-- Navigation Links --}}
    <ul class="space-y-2">
        <li>
            <a href="#" class="flex items-center space-x-3 text-lg hover:bg-gray-700 hover:text-white p-3 rounded-lg transition-colors">
                {{-- Dashboard Icon --}}
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M5 12H3l9-9l9 9h-2M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-7"/><path d="M9 21v-6a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v6"/></g></svg>
                <span>Home</span>
            </a>
        </li>
        <li>
            <a href="#" class="flex items-center space-x-3 text-lg hover:bg-gray-700 hover:text-white p-3 rounded-lg transition-colors">
                {{-- Dashboard Icon --}}
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h4a1 1 0 0 1 1 1v6a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1m0 12h4a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-2a1 1 0 0 1 1-1m10-4h4a1 1 0 0 1 1 1v6a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1v-6a1 1 0 0 1 1-1m0-8h4a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1"/></svg>
                <span>Dashboard</span>
            </a>
        </li>
        <li>
            <a href="#" class="flex items-center space-x-3 text-lg hover:bg-gray-700 hover:text-white p-3 rounded-lg transition-colors">
                {{-- Members Icon --}}
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 16 16"><path fill="currentColor" d="M2 5.5a3.5 3.5 0 1 1 5.898 2.549a5.51 5.51 0 0 1 3.034 4.084a.75.75 0 1 1-1.482.235a4 4 0 0 0-7.9 0a.75.75 0 0 1-1.482-.236A5.5 5.5 0 0 1 3.102 8.05A3.5 3.5 0 0 1 2 5.5M11 4a3.001 3.001 0 0 1 2.22 5.018a5 5 0 0 1 2.56 3.012a.749.749 0 0 1-.885.954a.75.75 0 0 1-.549-.514a3.51 3.51 0 0 0-2.522-2.372a.75.75 0 0 1-.574-.73v-.352a.75.75 0 0 1 .416-.672A1.5 1.5 0 0 0 11 5.5A.75.75 0 0 1 11 4m-5.5-.5a2 2 0 1 0-.001 3.999A2 2 0 0 0 5.5 3.5"/></svg>
                <span>Members</span>
            </a>
        </li>
        <li>
            <a href="#" class="flex items-center space-x-3 text-lg hover:bg-gray-700 hover:text-white p-3 rounded-lg transition-colors">
                {{-- Reports Icon --}}
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V7a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" /></svg>
                <span>Reports</span>
            </a>
        </li>
        <li>
            <a href="#" class="flex items-center space-x-3 text-lg hover:bg-gray-700 hover:text-white p-3 rounded-lg transition-colors">
                {{-- Settings Icon --}}
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                <span>Settings</span>
            </a>
        </li>
    </ul>
</aside>
