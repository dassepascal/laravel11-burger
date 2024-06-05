


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-500 flex justify-center text-white ">
        <p class="mx-10">
            Réalisation d'un site E-commerce.<br>
            Paiement en ligne.<br>
            Utilisation de stripe.<br>
            Le paiement ne fonctionne pas en ligne mais le code est fonctionnel.Il faut configurer stripe pour que le paiement fonctionne.
        </p>

    </div>
</x-app-layout>
