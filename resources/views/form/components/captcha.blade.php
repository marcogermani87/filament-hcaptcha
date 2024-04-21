<x-hcaptcha::script use-app-locale/>

<x-dynamic-component
    :component="$getFieldWrapperView()"
    :field="method_exists($this, 'id')  ? $field : null"
    :component="$getFieldWrapperView()"
    :id="$getId()"
    :label="$getLabel()"
    :label-sr-only="$isLabelHidden()"
    :helper-text="$getHelperText()"
    :hint="$getHint()"
    :hint-color="$getHintColor()"
    :hint-icon="$getHintIcon()"
    :required="$isRequired()"
    :state-path="$getStatePath()"
>
    <div x-data="{ state: $wire.entangle('{{ $getStatePath() }}').defer }">
        <input type="hidden" wire:model="h-captcha-response" value="1"/>
    </div>
    <div x-data="{ state: $wire.entangle('{{ $getStatePath() }}').defer }" wire:ignore>
        <x-hcaptcha::widget/>
    </div>
</x-dynamic-component>
