@esntend


<div>
<ul class="localization">
                              
                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <li>
                                    @if( LaravelLocalization::getCurrentLocale() != "ar" && $localeCode == "ar")    

                                    <a class="white-text" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                        <!--{{ $properties['native'] }}-->
                                        {{ __('links.ar') }}
                                    </a>

                                    @endif
                                    @if( LaravelLocalization::getCurrentLocale() != "en" && $localeCode == "en")  
                                    <a class="white-text" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">

                                    {{ __('links.en') }}                                    </a>
                                    @endif
                                    <!--|-->
                                </li>
                                @endforeach
                            </ul>
<h1>
{{ __('titles.album') }}

<a href="{{ LaravelLocalization::localizeUrl('/') }}"> {{ __('links.home') }} </a>
</h1></div>