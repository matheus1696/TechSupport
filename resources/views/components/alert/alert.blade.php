@if (\Session::has('success'))
    <div class="fixed z-50 transition duration-700 bottom-2 right-2 alert">
        <div class="overflow-hidden rounded-lg shadow-lg">
            <div class="px-4 py-3 text-white bg-green-800 ">
                <span class="text-sm">{!! \Session::get('success') !!}</span>
            </div>
            <div class="w-full h-1 transition-all duration-1000 bg-green-900 borderAlert"></div>
        </div>
    </div>
@endif

@if (\Session::has('error'))
    <div class="fixed z-50 transition duration-700 bottom-2 right-2 alert">
        <div class="overflow-hidden rounded-lg shadow-lg">
            <div class="px-4 py-3 text-white bg-red-800 ">
                <span class="text-sm">{!! \Session::get('error') !!}</span>
            </div>
            <div class="w-full h-1 transition-all duration-1000 bg-red-900 borderAlert"></div>
        </div>
    </div>
@endif

<script>
    setTimeout( function relogio() {
    let = document.querySelector('.borderAlert').classList.remove('w-full')
    let = document.querySelector('.borderAlert').classList.add('w-1')
    }, 1300)
    setTimeout( function relogio() {
        let = document.querySelector('.alert').classList.add('opacity-0')
    }, 2000)
</script>


