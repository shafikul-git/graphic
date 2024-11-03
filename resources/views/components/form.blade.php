
@props([
    'action',
    'method' => 'POST',
    'fields' => [],
])

<form action="{{ $action }}" method="{{ $method === 'GET' ? 'GET' : 'POST' }}" {{ $attributes }}>
    @csrf
    @unless (in_array($method, ['GET', 'POST']))
        @method($method)
    @endunless

        @foreach ($fields as $field)
            @if (!isset($field['inputDuel']))
            <div class="row">
                <div class="col mb-6">

                    @if (isset($field['label']))
                        @if ($field['type'] != 'hidden')
                            <label 
                                for="{{ $field['id'] }}"
                                class="{{ $field['label']['class'] }}">
                                {{ $field['label']['name'] }}
                            </label>
                        @endif
                    @endif

                    @php
                        $modifyClass = '';
                        if (isset($field['class'])) {
                        $modifyClass .= $field['class'];
                        }
                    @endphp

                    @if ($field['type'] === 'select')
                        <select name="{{ $field['name'] }}" 
                        id="{{ $field['id'] }}" 

                        @error($field['name'])
                        @php
                            $modifyClass .= " is-invalid ";
                        @endphp
                        @enderror

                        class="{{ $modifyClass }}">
                            <option value="" selected disabled class="text-capitalize">Select</option>
                            @foreach ($field['options'] as $value => $label)
                                <option value="{{ $value }}" {{ old($field['name']) == $value ? 'selected' : '' }} class="text-capitalize">{{ $label }}</option>
                            @endforeach
                        </select>
                    @else
                        <input 
                                type="{{ $field['type'] }}" 
                                name="{{ $field['name'] }}"
                            @if (isset($field['id'])) 
                                id="{{ $field['id'] }}" 
                            @endif
                            @if (isset($field['placeholder']))
                                placeholder="{{ $field['placeholder'] }}" 
                            @endif
                            @if (isset($field['value'])) 
                                value="{{ $field['value'] }}"
                            @else
                                value="{{ old($field['name']) }}" 
                            @endif
        
                            @error($field['name'])
                            @php
                                $modifyClass .= " is-invalid ";
                            @endphp
                            @enderror

                            class="{{ $modifyClass }}" 
                        />
                    @endif
                    @error($field['name'])
                        <small class="text-danger"> {{ $message }} </small>
                    @enderror
                </div>
            </div>
            @else
            <div class="row g-6">
                @foreach ($field['inputs'] as $duelInput)
                <div class="col mb-0">
                    @if (isset($duelInput['label']))
                        @if ($duelInput['type'] != 'hidden')
                            <label 
                                for="{{ $duelInput['id'] }}"
                                class="{{ $duelInput['label']['class'] }}">
                                {{ $duelInput['label']['name'] }}
                            </label>
                        @endif
                    @endif

                    @php
                        $modifyClassduelInput = '';
                        if (isset($duelInput['class'])) {
                        $modifyClassduelInput .= $duelInput['class'];
                        }
                    @endphp
                    
                    @if ($duelInput['type'] === 'select')
                        <select name="{{ $duelInput['name'] }}" 
                        id="{{ $duelInput['id'] }}" 

                        @error($duelInput['name'])
                        @php
                            $modifyClassduelInput .= " is-invalid ";
                        @endphp
                        @enderror

                        class="{{ $modifyClassduelInput }}">
                            <option value="" selected disabled class="text-capitalize">Select</option>
                            @foreach ($duelInput['options'] as $val => $lab)
                                <option value="{{ $val }}" {{ (old($duelInput['name']) == $val ? 'selected' : '') || (isset($duelInput['value']) == $val ? 'selected' : '')}} class="text-capitalize">{{ $lab }}</option>
                            @endforeach
                        </select>
                    @else
                        <input 
                                type="{{ $duelInput['type'] }}" 
                                name="{{ $duelInput['name'] }}"
                            @if (isset($duelInput['id'])) 
                                id="{{ $duelInput['id'] }}" 
                            @endif
                            @if (isset($duelInput['placeholder']))
                                placeholder="{{ $duelInput['placeholder'] }}" 
                            @endif
                            @if (isset($duelInput['value'])) 
                                value="{{ $duelInput['value'] }}"
                            @else
                                value="{{ old($duelInput['name']) }}" 
                            @endif
        
                            @error($duelInput['name'])
                            @php
                                $modifyClassduelInput .= " is-invalid ";
                            @endphp
                            @enderror

                            class="{{ $modifyClassduelInput }}" 
                        />
                    @endif

                    @error($duelInput['name'])
                        <small class="text-danger"> {{ $message }} </small>
                    @enderror
                </div>
                @endforeach

            </div>
            @endif
        @endforeach
      
        {{ $slot }}
</form>