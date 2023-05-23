    <div id="advertisement-modal" class="fixed inset-0 flex items-center justify-center z-50 bg-black bg-opacity-50">
        <div class="bg-white p-8 rounded-lg">
            <h3 class="text-xl font-bold mb-4">¡Descuento especial por tiempo limitado!</h3>
            <p>Aprovecha nuestra oferta especial con un descuento del 20% en todos nuestros productos. ¡No te lo
                pierdas!
            </p>
            <button id="closeAdvertisementButton" data-modal-hide="advertisement-modal"
                class="mt-6 bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none">Cerrar</button>
        </div>
    </div>
</div>
<script>
    var showAdvertisementModal = {{ $showAdvertisementModal ? 'true' : 'false' }};
</script>
