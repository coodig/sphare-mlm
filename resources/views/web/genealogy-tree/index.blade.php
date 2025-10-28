@extends('layouts.app')

@section('title', 'Genealogy Tree')

@section('content')
    {{-- कंटेनर को max-w-5xl कर दिया गया है --}}
    <div class="container mx-auto max-w-5xl p-4 md:p-8">

        <h1 class="text-3xl font-bold text-gray-900 mb-6">Expandable Binary Tree</h1>

        <div class="tree-container">
            <div class="tree">
                <ul>
                    <li>
                        <a href="#"><img src="{{ asset('assets/images/default-profile.png') }}" alt=""><span>Root</span></a>
                        <ul>
                            <li>
                                <a href="#"><img src="{{ asset('assets/images/default-profile.png') }}" alt=""><span>Child 1</span></a>
                                <ul>
                                    <li>
                                        <a href="#"><img src="{{ asset('assets/images/default-profile.png') }}" alt=""><span>Grandchild 1</span></a>
                                        <ul class="collapsible">
                                            <li>
                                                <a href="#"><img src="{{ asset('assets/images/default-profile.png') }}" alt=""><span>Level 5 Node 1</span></a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="{{ asset('assets/images/default-profile.png') }}" alt=""><span>Level 5 Node 2</span></a>
                                            </li>
                                        </ul>
                                        <span class="toggle-btn">[+]</span>
                                    </li>
                                    <li>
                                        <a href="#"><img src="{{ asset('assets/images/default-profile.png') }}" alt=""><span>Grandchild 2</span></a>
                                        <ul class="collapsible">
                                            <li><a href="#"><img src="{{ asset('assets/images/default-profile.png') }}" alt=""><span>Level 5 Node 3</span></a>
                                            </li>
                                            <li><a href="#"><img src="{{ asset('assets/images/default-profile.png') }}" alt=""><span>Level 5 Node 4</span></a>
                                            </li>
                                        </ul>
                                        <span class="toggle-btn">[+]</span>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><img src="{{ asset('assets/images/default-profile.png') }}" alt=""><span>Child 2</span></a>
                                <ul>
                                    <li>
                                        <a href="#"><img src="{{ asset('assets/images/default-profile.png') }}" alt=""><span>Grandchild 3</span></a>
                                        <ul class="collapsible">
                                            <li><a href="#"><img src="{{ asset('assets/images/default-profile.png') }}" alt=""><span>Level 5 Node 5</span></a>
                                                <ul class="collapsible">
                                                    <li><a href="#"><img src="{{ asset('assets/images/default-profile.png') }}" alt=""><span>Level 5 Node
                                                                5</span></a></li>
                                                    <li><a href="#"><img src="{{ asset('assets/images/default-profile.png') }}" alt=""><span>Level 5 Node
                                                                6</span></a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#"><img src="{{ asset('assets/images/default-profile.png') }}" alt=""><span>Level 5 Node 6</span></a>
                                            </li>
                                        </ul>
                                        <span class="toggle-btn">[+]</span>
                                    </li>
                                    <li>
                                        <a href="#"><img src="{{ asset('assets/images/default-profile.png') }}" alt=""><span>Grandchild 4</span></a>
                                        <ul class="collapsible">
                                            <li><a href="#"><img src="{{ asset('assets/images/default-profile.png') }}" alt=""><span>Level 5 Node 7</span></a>
                                            </li>
                                            <li><a href="#"><img src="{{ asset('assets/images/default-profile.png') }}" alt=""><span>Level 5 Node 8</span></a>
                                            </li>
                                        </ul>
                                        <span class="toggle-btn">[+]</span>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

    </div>
    <script>
        // Collapsible toggle
        const buttons = document.querySelectorAll('.toggle-btn');
        buttons.forEach(btn => {
            btn.addEventListener('click', () => {
                const ul = btn.previousElementSibling; // target the <ul.collapsible>
                    if (ul.style.display === 'block') {
                        ul.style.display = 'none';
                        btn.textContent = '[+]';
                    } else {
                        ul.style.display = 'block';
                        btn.textContent = '[-]';
                    }
                });
            });
        </script>

@endsection
