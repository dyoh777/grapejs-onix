{{-- Check if the push css empty if yes them just display it may not work correct so i recoment use the push --}}
@if (empty($pushLocationCss))
    {{-- pushh the css need for this plugisn to work  --}}
    <x-onix::BuilderCss
        mainBackgroudColor="{{ $mainBackgroudColor ?? '#000000' }}"
        textColor="{{ $textColor ?? '#ffffff' }}"
    />
@else
    @push($pushLocationCss)
        {{-- pushh the css need for this plugisn to work  --}}
        <x-onix::BuilderCss
            mainBackgroudColor="{{ $mainBackgroudColor ?? '#000000' }}"
            textColor="{{ $textColor ?? '#ffffff' }}"
        />
    @endpush
@endif

{{-- the floating icons --}}
<a href="#" onclick="saveContent()" class="float">
    <i class="fas fa-save my-float"></i>
</a>
<div class="label-container">
    <div class="label-text">Save Page</div>
    <i class="fa fa-play label-arrow"></i>
</div>


{{-- start the editor using the id --}}
<div id="onix-grape">
    {{ $slot }}
</div>

{{-- Check if the push js empty if yes them just display it may not work correct so i recoment use the push --}}
@if (empty($pushLocationJs))
    {{-- pushh the css need for this plugisn to work  --}}
    <x-onix::GrapeBuilderJs
        saveUrl="{{ $saveUrl ?? null }}"
        loadUrl="{{ $loadUrl ?? null }}"
        plugin="{{ $plugin ?? 'onixPlugins' }}"
    >
    {{ $pluginJs ?? '' }}
    </x-onix::GrapeBuilderJs>
@else
    @push($pushLocationJs)
        <x-onix::GrapeBuilderJs
            saveUrl="{{ $saveUrl ?? null }}"
            loadUrl="{{ $loadUrl ?? null }}"
            plugin="{{ $plugin ?? 'onixPlugins' }}"
        >
        {{ $pluginJs ?? '' }}
        </x-onix::GrapeBuilderJs>
    @endpush
@endif
