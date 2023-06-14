<div class="flex justify-center items-center">
    <div class="flex hover:scale-105 ease-in duration-300">
        <a href="{{ $ruta }}" class="flex items-center px-4 py-2 font-semibold tracking-widest text-white transition duration-150 ease-in-out bg-[#004e7c] border rounded-md tet-sm border-transparet hover:bg-[#0174ab]">
            <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            <label class="ml-1 text-xs hover:cursor-pointer">{{ $slot }}</label>
        </a>
    </div>
</div>