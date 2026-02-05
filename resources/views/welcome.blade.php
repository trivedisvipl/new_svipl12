<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                /*! tailwindcss v4.0.7 | MIT License | https://tailwindcss.com */@layer theme{:root,:host{--font-sans:'Instrument Sans',ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";--font-serif:ui-serif,Georgia,Cambria,"Times New Roman",Times,serif;--font-mono:ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;--color-red-50:oklch(.971 .013 17.38);--color-red-100:oklch(.936 .032 17.717);--color-red-200:oklch(.885 .062 18.334);--color-red-300:oklch(.808 .114 19.571);--color-red-400:oklch(.704 .191 22.216);--color-red-500:oklch(.637 .237 25.331);--color-red-600:oklch(.577 .245 27.325);--color-red-700:oklch(.505 .213 27.518);--color-red-800:oklch(.444 .177 26.899);--color-red-900:oklch(.396 .141 25.723);--color-red-950:oklch(.258 .092 26.042);--color-orange-50:oklch(.98 .016 73.684);--color-orange-100:oklch(.954 .038 75.164);--color-orange-200:oklch(.901 .076 70.697);--color-orange-300:oklch(.837 .128 66.29);--color-orange-400:oklch(.75 .183 55.934);--color-orange-500:oklch(.705 .213 47.604);--color-orange-600:oklch(.646 .222 41.116);--color-orange-700:oklch(.553 .195 38.402);--color-orange-800:oklch(.47 .157 37.304);--color-orange-900:oklch(.408 .123 38.172);--color-orange-950:oklch(.266 .079 36.259);--color-amber-50:oklch(.987 .022 95.277);--color-amber-100:oklch(.962 .059 95.617);--color-amber-200:oklch(.924 .12 95.746);--color-amber-300:oklch(.879 .169 91.605);--color-amber-400:oklch(.828 .189 84.429);--color-amber-500:oklch(.769 .188 70.08);--color-amber-600:oklch(.666 .179 58.318);--color-amber-700:oklch(.555 .163 48.998);--color-amber-800:oklch(.473 .137 46.201);--color-amber-900:oklch(.414 .112 45.904);--color-amber-950:oklch(.279 .077 45.635);--color-yellow-50:oklch(.987 .026 102.212);--color-yellow-100:oklch(.973 .071 103.193);--color-yellow-200:oklch(.945 .129 101.54);--color-yellow-300:oklch(.905 .182 98.111);--color-yellow-400:oklch(.852 .199 91.936);--color-yellow-500:oklch(.795 .184 86.047);--color-yellow-600:oklch(.681 .162 75.834);--color-yellow-700:oklch(.554 .135 66.442);--color-yellow-800:oklch(.476 .114 61.907);--color-yellow-900:oklch(.421 .095 57.708);--color-yellow-950:oklch(.286 .066 53.813);--color-lime-50:oklch(.986 .031 120.757);--color-lime-100:oklch(.967 .067 122.328);--color-lime-200:oklch(.938 .127 124.321);--color-lime-300:oklch(.897 .196 126.665);--color-lime-400:oklch(.841 .238 128.85);--color-lime-500:oklch(.768 .233 130.85);--color-lime-600:oklch(.648 .2 131.684);--color-lime-700:oklch(.532 .157 131.589);--color-lime-800:oklch(.453 .124 130.933);--color-lime-900:oklch(.405 .101 131.063);--color-lime-950:oklch(.274 .072 132.109);--color-green-50:oklch(.982 .018 155.826);--color-green-100:oklch(.962 .044 156.743);--color-green-200:oklch(.925 .084 155.995);--color-green-300:oklch(.871 .15 154.449);--color-green-400:oklch(.792 .209 151.711);--color-green-500:oklch(.723 .219 149.579);--color-green-600:oklch(.627 .194 149.214);--color-green-700:oklch(.527 .154 150.069);--color-green-800:oklch(.448 .119 151.328);--color-green-900:oklch(.393 .095 152.535);--color-green-950:oklch(.266 .065 152.934);--color-emerald-50:oklch(.979 .021 166.113);--color-emerald-100:oklch(.95 .052 163.051);--color-emerald-200:oklch(.905 .093 164.15);--color-emerald-300:oklch(.845 .143 164.978);--color-emerald-400:oklch(.765 .177 163.223);--color-emerald-500:oklch(.696 .17 162.48);--color-emerald-600:oklch(.596 .145 163.225);--color-emerald-700:oklch(.508 .118 165.612);--color-emerald-800:oklch(.432 .095 166.913);--color-emerald-900:oklch(.378 .077 168.94);--color-emerald-950:oklch(.262 .051 172.552);--color-teal-50:oklch(.984 .014 180.72);--color-teal-100:oklch(.953 .051 180.801);--color-teal-200:oklch(.91 .096 180.426);--color-teal-300:oklch(.855 .138 181.071);--color-teal-400:oklch(.777 .152 181.912);--color-teal-500:oklch(.704 .14 182.503);--color-teal-600:oklch(.6 .118 184.704);--color-teal-700:oklch(.511 .096 186.391);--color-teal-800:oklch(.437 .078 188.216);--color-teal-900:oklch(.386 .063 188.416);--color-teal-950:oklch(.277 .046 192.524);--color-cyan-50:oklch(.984 .019 200.873);--color-cyan-100:oklch(.956 .045 203.388);--color-cyan-200:oklch(.917 .08 205.041);--color-cyan-300:oklch(.865 .127 207.078);--color-cyan-400:oklch(.789 .154 211.53);--color-cyan-500:oklch(.715 .143 215.221);--color-cyan-600:oklch(.609 .126 221.723);--color-cyan-700:oklch(.52 .105 223.128);--color-cyan-800:oklch(.45 .085 224.283);--color-cyan-900:oklch(.398 .07 227.392);--color-cyan-950:oklch(.302 .056 229.695);--color-sky-50:oklch(.977 .013 236.62);--color-sky-100:oklch(.951 .026 236.824);--color-sky-200:oklch(.901 .058 230.902);--color-sky-300:oklch(.828 .111 230.318);--color-sky-400:oklch(.746 .16 232.661);--color-sky-500:oklch(.685 .169 237.323);--color-sky-600:oklch(.588 .158 241.966);--color-sky-700:oklch(.5 .134 242.749);--color-sky-800:oklch(.443 .11 240.79);--color-sky-900:oklch(.391 .09 240.876);--color-sky-950:oklch(.293 .066 243.157);--color-blue-50:oklch(.97 .014 254.604);--color-blue-100:oklch(.932 .032 255.585);--color-blue-200:oklch(.882 .059 254.128);--color-blue-300:oklch(.809 .105 251.813);--color-blue-400:oklch(.707 .165 254.624);--color-blue-500:oklch(.623 .214 259.815);--color-blue-600:oklch(.546 .245 262.881);--color-blue-700:oklch(.488 .243 264.376);--color-blue-800:oklch(.424 .199 265.638);--color-blue-900:oklch(.379 .146 265.522);--color-blue-950:oklch(.282 .091 267.935);--color-indigo-50:oklch(.962 .018 272.314);--color-indigo-100:oklch(.93 .034 272.788);--color-indigo-200:oklch(.87 .065 274.039);--color-indigo-300:oklch(.785 .115 274.713);--color-indigo-400:oklch(.673 .182 276.935);--color-indigo-500:oklch(.585 .233 277.117);--color-indigo-600:oklch(.511 .262 276.966);--color-indigo-700:oklch(.457 .24 277.023);--color-indigo-800:oklch(.398 .195 277.366);--color-indigo-900:oklch(.359 .144 278.697);--color-indigo-950:oklch(.257 .09 281.288);--color-violet-50:oklch(.969 .016 293.756);--color-violet-100:oklch(.943 .029 294.588);--color-violet-200:oklch(.894 .057 293.283);--color-violet-300:oklch(.811 .111 293.571);--color-violet-400:oklch(.702 .183 293.541);--color-violet-500:oklch(.606 .25 292.717);--color-violet-600:oklch(.541 .281 293.009);--color-violet-700:oklch(.491 .27 292.581);--color-violet-800:oklch(.432 .232 292.759);--color-violet-900:oklch(.38 .189 293.745);--color-violet-950:oklch(.283 .141 291.089);--color-purple-50:oklch(.977 .014 308.299);--color-purple-100:oklch(.946 .033 307.174);--color-purple-200:oklch(.902 .063 306.703);--color-purple-300:oklch(.827 .119 306.383);--color-purple-400:oklch(.714 .203 305.504);--color-purple-500:oklch(.627 .265 303.9);--color-purple-600:oklch(.558 .288 302.321);--color-purple-700:oklch(.496 .265 301.924);--color-purple-800:oklch(.438 .218 303.724);--color-purple-900:oklch(.381 .176 304.987);--color-purple-950:oklch(.291 .149 302.717);--color-fuchsia-50:oklch(.977 .017 320.058);--color-fuchsia-100:oklch(.952 .037 318.852);--color-fuchsia-200:oklch(.903 .076 319.62);--color-fuchsia-300:oklch(.833 .145 321.434);--color-fuchsia-400:oklch(.74 .238 322.16);--color-fuchsia-500:oklch(.667 .295 322.15);--color-fuchsia-600:oklch(.591 .293 322.896);--color-fuchsia-700:oklch(.518 .253 323.949);--color-fuchsia-800:oklch(.452 .211 324.591);--color-fuchsia-900:oklch(.401 .17 325.612);--color-fuchsia-950:oklch(.293 .136 325.661);--color-pink-50:oklch(.971 .014 343.198);--color-pink-100:oklch(.948 .028 342.258);--color-pink-200:oklch(.899 .061 343.231);--color-pink-300:oklch(.823 .12 346.018);--color-pink-400:oklch(.718 .202 349.761);--color-pink-500:oklch(.656 .241 354.308);--color-pink-600:oklch(.592 .249 .584);--color-pink-700:oklch(.525 .223 3.958);--color-pink-800:oklch(.459 .187 3.815);--color-pink-900:oklch(.408 .153 2.432);--color-pink-950:oklch(.284 .109 3.907);--color-rose-50:oklch(.969 .015 12.422);--color-rose-100:oklch(.941 .03 12.58);--color-rose-200:oklch(.892 .058 10.001);--color-rose-300:oklch(.81 .117 11.638);--color-rose-400:oklch(.712 .194 13.428);--color-rose-500:oklch(.645 .246 16.439);--color-rose-600:oklch(.586 .253 17.585);--color-rose-700:oklch(.514 .222 16.935);--color-rose-800:oklch(.455 .188 13.697);--color-rose-900:oklch(.41 .159 10.272);--color-rose-950:oklch(.271 .105 12.094);--color-slate-50:oklch(.984 .003 247.858);--color-slate-100:oklch(.968 .007 247.896);--color-slate-200:oklch(.929 .013 255.508);--color-slate-300:oklch(.869 .022 252.894);--color-slate-400:oklch(.704 .04 256.788);--color-slate-500:oklch(.554 .046 257.417);--color-slate-600:oklch(.446 .043 257.281);--color-slate-700:oklch(.372 .044 257.287);--color-slate-800:oklch(.279 .041 260.031);--color-slate-900:oklch(.208 .042 265.755);--color-slate-950:oklch(.129 .042 264.695);--color-gray-50:oklch(.985 .002 247.839);--color-gray-100:oklch(.967 .003 264.542);--color-gray-200:oklch(.928 .006 264.531);--color-gray-300:oklch(.872 .01 258.338);--color-gray-400:oklch(.707 .022 261.325);--color-gray-500:oklch(.551 .027 264.364);--color-gray-600:oklch(.446 .03 256.802);--color-gray-700:oklch(.373 .034 259.733);--color-gray-800:oklch(.278 .033 256.848);--color-gray-900:oklch(.21 .034 264.665);--color-gray-950:oklch(.13 .028 261.692);--color-zinc-50:oklch(.985 0 0);--color-zinc-100:oklch(.967 .001 286.375);--color-zinc-200:oklch(.92 .004 286.32);--color-zinc-300:oklch(.871 .006 286.286);--color-zinc-400:oklch(.705 .015 286.067);--color-zinc-500:oklch(.552 .016 285.938);--color-zinc-600:oklch(.442 .017 285.786);--color-zinc-700:oklch(.37 .013 285.805);--color-zinc-800:oklch(.274 .006 286.033);--color-zinc-900:oklch(.21 .006 285.885);--color-zinc-950:oklch(.141 .005 285.823);--color-neutral-50:oklch(.985 0 0);--color-neutral-100:oklch(.97 0 0);--color-neutral-200:oklch(.922 0 0);--color-neutral-300:oklch(.87 0 0);--color-neutral-400:oklch(.708 0 0);--color-neutral-500:oklch(.556 0 0);--color-neutral-600:oklch(.439 0 0);--color-neutral-700:oklch(.371 0 0);--color-neutral-800:oklch(.269 0 0);--color-neutral-900:oklch(.205 0 0);--color-neutral-950:oklch(.145 0 0);--color-stone-50:oklch(.985 .001 106.423);--color-stone-100:oklch(.97 .001 106.424);--color-stone-200:oklch(.923 .003 48.717);--color-stone-300:oklch(.869 .005 56.366);--color-stone-400:oklch(.709 .01 56.259);--color-stone-500:oklch(.553 .013 58.071);--color-stone-600:oklch(.444 .011 73.639);--color-stone-700:oklch(.374 .01 67.558);--color-stone-800:oklch(.268 .007 34.298);--color-stone-900:oklch(.216 .006 56.043);--color-stone-950:oklch(.147 .004 49.25);--color-black:#000;--color-white:#fff;--spacing:.25rem;--breakpoint-sm:40rem;--breakpoint-md:48rem;--breakpoint-lg:64rem;--breakpoint-xl:80rem;--breakpoint-2xl:96rem;--container-3xs:16rem;--container-2xs:18rem;--container-xs:20rem;--container-sm:24rem;--container-md:28rem;--container-lg:32rem;--container-xl:36rem;--container-2xl:42rem;--container-3xl:48rem;--container-4xl:56rem;--container-5xl:64rem;--container-6xl:72rem;--container-7xl:80rem;--text-xs:.75rem;--text-xs--line-height:calc(1/.75);--text-sm:.875rem;--text-sm--line-height:calc(1.25/.875);--text-base:1rem;--text-base--line-height: 1.5 ;--text-lg:1.125rem;--text-lg--line-height:calc(1.75/1.125);--text-xl:1.25rem;--text-xl--line-height:calc(1.75/1.25);--text-2xl:1.5rem;--text-2xl--line-height:calc(2/1.5);--text-3xl:1.875rem;--text-3xl--line-height: 1.2 ;--text-4xl:2.25rem;--text-4xl--line-height:calc(2.5/2.25);--text-5xl:3rem;--text-5xl--line-height:1;--text-6xl:3.75rem;--text-6xl--line-height:1;--text-7xl:4.5rem;--text-7xl--line-height:1;--text-8xl:6rem;--text-8xl--line-height:1;--text-9xl:8rem;--text-9xl--line-height:1;--font-weight-thin:100;--font-weight-extralight:200;--font-weight-light:300;--font-weight-normal:400;--font-weight-medium:500;--font-weight-semibold:600;--font-weight-bold:700;--font-weight-extrabold:800;--font-weight-black:900;--tracking-tighter:-.05em;--tracking-tight:-.025em;--tracking-normal:0em;--tracking-wide:.025em;--tracking-wider:.05em;--tracking-widest:.1em;--leading-tight:1.25;--leading-snug:1.375;--leading-normal:1.5;--leading-relaxed:1.625;--leading-loose:2;--radius-xs:.125rem;--radius-sm:.25rem;--radius-md:.375rem;--radius-lg:.5rem;--radius-xl:.75rem;--radius-2xl:1rem;--radius-3xl:1.5rem;--radius-4xl:2rem;--shadow-2xs:0 1px #0000000d;--shadow-xs:0 1px 2px 0 #0000000d;--shadow-sm:0 1px 3px 0 #0000001a,0 1px 2px -1px #0000001a;--shadow-md:0 4px 6px -1px #0000001a,0 2px 4px -2px #0000001a;--shadow-lg:0 10px 15px -3px #0000001a,0 4px 6px -4px #0000001a;--shadow-xl:0 20px 25px -5px #0000001a,0 8px 10px -6px #0000001a;--shadow-2xl:0 25px 50px -12px #00000040;--inset-shadow-2xs:inset 0 1px #0000000d;--inset-shadow-xs:inset 0 1px 1px #0000000d;--inset-shadow-sm:inset 0 2px 4px #0000000d;--drop-shadow-xs:0 1px 1px #0000000d;--drop-shadow-sm:0 1px 2px #00000026;--drop-shadow-md:0 3px 3px #0000001f;--drop-shadow-lg:0 4px 4px #00000026;--drop-shadow-xl:0 9px 7px #0000001a;--drop-shadow-2xl:0 25px 25px #00000026;--ease-in:cubic-bezier(.4,0,1,1);--ease-out:cubic-bezier(0,0,.2,1);--ease-in-out:cubic-bezier(.4,0,.2,1);--animate-spin:spin 1s linear infinite;--animate-ping:ping 1s cubic-bezier(0,0,.2,1)infinite;--animate-pulse:pulse 2s cubic-bezier(.4,0,.6,1)infinite;--animate-bounce:bounce 1s infinite;--blur-xs:4px;--blur-sm:8px;--blur-md:12px;--blur-lg:16px;--blur-xl:24px;--blur-2xl:40px;--blur-3xl:64px;--perspective-dramatic:100px;--perspective-near:300px;--perspective-normal:500px;--perspective-midrange:800px;--perspective-distant:1200px;--aspect-video:16/9;--default-transition-duration:.15s;--default-transition-timing-function:cubic-bezier(.4,0,.2,1);--default-font-family:var(--font-sans);--default-font-feature-settings:var(--font-sans--font-feature-settings);--default-font-variation-settings:var(--font-sans--font-variation-settings);--default-mono-font-family:var(--font-mono);--default-mono-font-feature-settings:var(--font-mono--font-feature-settings);--default-mono-font-variation-settings:var(--font-mono--font-variation-settings)}}@layer base{*,:after,:before,::backdrop{box-sizing:border-box;border:0 solid;margin:0;padding:0}::file-selector-button{box-sizing:border-box;border:0 solid;margin:0;padding:0}html,:host{-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;line-height:1.5;font-family:var(--default-font-family,ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji");font-feature-settings:var(--default-font-feature-settings,normal);font-variation-settings:var(--default-font-variation-settings,normal);-webkit-tap-highlight-color:transparent}body{line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;-webkit-text-decoration:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,samp,pre{font-family:var(--default-mono-font-family,ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace);font-feature-settings:var(--default-mono-font-feature-settings,normal);font-variation-settings:var(--default-mono-font-variation-settings,normal);font-size:1em}small{font-size:80%}sub,sup{vertical-align:baseline;font-size:75%;line-height:0;position:relative}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}:-moz-focusring{outline:auto}progress{vertical-align:baseline}summary{display:list-item}ol,ul,menu{list-style:none}img,svg,video,canvas,audio,iframe,embed,object{vertical-align:middle;display:block}img,video{max-width:100%;height:auto}button,input,select,optgroup,textarea{font:inherit;font-feature-settings:inherit;font-variation-settings:inherit;letter-spacing:inherit;color:inherit;opacity:1;background-color:#0000;border-radius:0}::file-selector-button{font:inherit;font-feature-settings:inherit;font-variation-settings:inherit;letter-spacing:inherit;color:inherit;opacity:1;background-color:#0000;border-radius:0}:where(select:is([multiple],[size])) optgroup{font-weight:bolder}:where(select:is([multiple],[size])) optgroup option{padding-inline-start:20px}::file-selector-button{margin-inline-end:4px}::placeholder{opacity:1;color:color-mix(in oklab,currentColor 50%,transparent)}textarea{resize:vertical}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-date-and-time-value{min-height:1lh;text-align:inherit}::-webkit-datetime-edit{display:inline-flex}::-webkit-datetime-edit-fields-wrapper{padding:0}::-webkit-datetime-edit{padding-block:0}::-webkit-datetime-edit-year-field{padding-block:0}::-webkit-datetime-edit-month-field{padding-block:0}::-webkit-datetime-edit-day-field{padding-block:0}::-webkit-datetime-edit-hour-field{padding-block:0}::-webkit-datetime-edit-minute-field{padding-block:0}::-webkit-datetime-edit-second-field{padding-block:0}::-webkit-datetime-edit-millisecond-field{padding-block:0}::-webkit-datetime-edit-meridiem-field{padding-block:0}:-moz-ui-invalid{box-shadow:none}button,input:where([type=button],[type=reset],[type=submit]){-webkit-appearance:button;-moz-appearance:button;appearance:button}::file-selector-button{-webkit-appearance:button;-moz-appearance:button;appearance:button}::-webkit-inner-spin-button{height:auto}::-webkit-outer-spin-button{height:auto}[hidden]:where(:not([hidden=until-found])){display:none!important}}@layer components;@layer utilities{.absolute{position:absolute}.relative{position:relative}.static{position:static}.inset-0{inset:calc(var(--spacing)*0)}.-mt-\[4\.9rem\]{margin-top:-4.9rem}.-mb-px{margin-bottom:-1px}.mb-1{margin-bottom:calc(var(--spacing)*1)}.mb-2{margin-bottom:calc(var(--spacing)*2)}.mb-4{margin-bottom:calc(var(--spacing)*4)}.mb-6{margin-bottom:calc(var(--spacing)*6)}.-ml-8{margin-left:calc(var(--spacing)*-8)}.flex{display:flex}.hidden{display:none}.inline-block{display:inline-block}.inline-flex{display:inline-flex}.table{display:table}.aspect-\[335\/376\]{aspect-ratio:335/376}.h-1{height:calc(var(--spacing)*1)}.h-1\.5{height:calc(var(--spacing)*1.5)}.h-2{height:calc(var(--spacing)*2)}.h-2\.5{height:calc(var(--spacing)*2.5)}.h-3{height:calc(var(--spacing)*3)}.h-3\.5{height:calc(var(--spacing)*3.5)}.h-14{height:calc(var(--spacing)*14)}.h-14\.5{height:calc(var(--spacing)*14.5)}.min-h-screen{min-height:100vh}.w-1{width:calc(var(--spacing)*1)}.w-1\.5{width:calc(var(--spacing)*1.5)}.w-2{width:calc(var(--spacing)*2)}.w-2\.5{width:calc(var(--spacing)*2.5)}.w-3{width:calc(var(--spacing)*3)}.w-3\.5{width:calc(var(--spacing)*3.5)}.w-\[448px\]{width:448px}.w-full{width:100%}.max-w-\[335px\]{max-width:335px}.max-w-none{max-width:none}.flex-1{flex:1}.shrink-0{flex-shrink:0}.translate-y-0{--tw-translate-y:calc(var(--spacing)*0);translate:var(--tw-translate-x)var(--tw-translate-y)}.transform{transform:var(--tw-rotate-x)var(--tw-rotate-y)var(--tw-rotate-z)var(--tw-skew-x)var(--tw-skew-y)}.flex-col{flex-direction:column}.flex-col-reverse{flex-direction:column-reverse}.items-center{align-items:center}.justify-center{justify-content:center}.justify-end{justify-content:flex-end}.gap-3{gap:calc(var(--spacing)*3)}.gap-4{gap:calc(var(--spacing)*4)}:where(.space-x-1>:not(:last-child)){--tw-space-x-reverse:0;margin-inline-start:calc(calc(var(--spacing)*1)*var(--tw-space-x-reverse));margin-inline-end:calc(calc(var(--spacing)*1)*calc(1 - var(--tw-space-x-reverse)))}.overflow-hidden{overflow:hidden}.rounded-full{border-radius:3.40282e38px}.rounded-sm{border-radius:var(--radius-sm)}.rounded-t-lg{border-top-left-radius:var(--radius-lg);border-top-right-radius:var(--radius-lg)}.rounded-br-lg{border-bottom-right-radius:var(--radius-lg)}.rounded-bl-lg{border-bottom-left-radius:var(--radius-lg)}.border{border-style:var(--tw-border-style);border-width:1px}.border-\[\#19140035\]{border-color:#19140035}.border-\[\#e3e3e0\]{border-color:#e3e3e0}.border-black{border-color:var(--color-black)}.border-transparent{border-color:#0000}.bg-\[\#1b1b18\]{background-color:#1b1b18}.bg-\[\#FDFDFC\]{background-color:#fdfdfc}.bg-\[\#dbdbd7\]{background-color:#dbdbd7}.bg-\[\#fff2f2\]{background-color:#fff2f2}.bg-white{background-color:var(--color-white)}.p-6{padding:calc(var(--spacing)*6)}.px-5{padding-inline:calc(var(--spacing)*5)}.py-1{padding-block:calc(var(--spacing)*1)}.py-1\.5{padding-block:calc(var(--spacing)*1.5)}.py-2{padding-block:calc(var(--spacing)*2)}.pb-12{padding-bottom:calc(var(--spacing)*12)}.text-sm{font-size:var(--text-sm);line-height:var(--tw-leading,var(--text-sm--line-height))}.text-\[13px\]{font-size:13px}.leading-\[20px\]{--tw-leading:20px;line-height:20px}.leading-normal{--tw-leading:var(--leading-normal);line-height:var(--leading-normal)}.font-medium{--tw-font-weight:var(--font-weight-medium);font-weight:var(--font-weight-medium)}.text-\[\#1b1b18\]{color:#1b1b18}.text-\[\#706f6c\]{color:#706f6c}.text-\[\#F53003\],.text-\[\#f53003\]{color:#f53003}.text-white{color:var(--color-white)}.underline{text-decoration-line:underline}.underline-offset-4{text-underline-offset:4px}.opacity-100{opacity:1}.shadow-\[0px_0px_1px_0px_rgba\(0\,0\,0\,0\.03\)\,0px_1px_2px_0px_rgba\(0\,0\,0\,0\.06\)\]{--tw-shadow:0px 0px 1px 0px var(--tw-shadow-color,#00000008),0px 1px 2px 0px var(--tw-shadow-color,#0000000f);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.shadow-\[inset_0px_0px_0px_1px_rgba\(26\,26\,0\,0\.16\)\]{--tw-shadow:inset 0px 0px 0px 1px var(--tw-shadow-color,#1a1a0029);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.\!filter{filter:var(--tw-blur,)var(--tw-brightness,)var(--tw-contrast,)var(--tw-grayscale,)var(--tw-hue-rotate,)var(--tw-invert,)var(--tw-saturate,)var(--tw-sepia,)var(--tw-drop-shadow,)!important}.filter{filter:var(--tw-blur,)var(--tw-brightness,)var(--tw-contrast,)var(--tw-grayscale,)var(--tw-hue-rotate,)var(--tw-invert,)var(--tw-saturate,)var(--tw-sepia,)var(--tw-drop-shadow,)}.transition-all{transition-property:all;transition-timing-function:var(--tw-ease,var(--default-transition-timing-function));transition-duration:var(--tw-duration,var(--default-transition-duration))}.transition-opacity{transition-property:opacity;transition-timing-function:var(--tw-ease,var(--default-transition-timing-function));transition-duration:var(--tw-duration,var(--default-transition-duration))}.delay-300{transition-delay:.3s}.duration-750{--tw-duration:.75s;transition-duration:.75s}.not-has-\[nav\]\:hidden:not(:has(:is(nav))){display:none}.before\:absolute:before{content:var(--tw-content);position:absolute}.before\:top-0:before{content:var(--tw-content);top:calc(var(--spacing)*0)}.before\:top-1\/2:before{content:var(--tw-content);top:50%}.before\:bottom-0:before{content:var(--tw-content);bottom:calc(var(--spacing)*0)}.before\:bottom-1\/2:before{content:var(--tw-content);bottom:50%}.before\:left-\[0\.4rem\]:before{content:var(--tw-content);left:.4rem}.before\:border-l:before{content:var(--tw-content);border-left-style:var(--tw-border-style);border-left-width:1px}.before\:border-\[\#e3e3e0\]:before{content:var(--tw-content);border-color:#e3e3e0}@media (hover:hover){.hover\:border-\[\#1915014a\]:hover{border-color:#1915014a}.hover\:border-\[\#19140035\]:hover{border-color:#19140035}.hover\:border-black:hover{border-color:var(--color-black)}.hover\:bg-black:hover{background-color:var(--color-black)}}@media (width>=64rem){.lg\:-mt-\[6\.6rem\]{margin-top:-6.6rem}.lg\:mb-0{margin-bottom:calc(var(--spacing)*0)}.lg\:mb-6{margin-bottom:calc(var(--spacing)*6)}.lg\:-ml-px{margin-left:-1px}.lg\:ml-0{margin-left:calc(var(--spacing)*0)}.lg\:block{display:block}.lg\:aspect-auto{aspect-ratio:auto}.lg\:w-\[438px\]{width:438px}.lg\:max-w-4xl{max-width:var(--container-4xl)}.lg\:grow{flex-grow:1}.lg\:flex-row{flex-direction:row}.lg\:justify-center{justify-content:center}.lg\:rounded-t-none{border-top-left-radius:0;border-top-right-radius:0}.lg\:rounded-tl-lg{border-top-left-radius:var(--radius-lg)}.lg\:rounded-r-lg{border-top-right-radius:var(--radius-lg);border-bottom-right-radius:var(--radius-lg)}.lg\:rounded-br-none{border-bottom-right-radius:0}.lg\:p-8{padding:calc(var(--spacing)*8)}.lg\:p-20{padding:calc(var(--spacing)*20)}}@media (prefers-color-scheme:dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:border-\[\#3E3E3A\]{border-color:#3e3e3a}.dark\:border-\[\#eeeeec\]{border-color:#eeeeec}.dark\:bg-\[\#0a0a0a\]{background-color:#0a0a0a}.dark\:bg-\[\#1D0002\]{background-color:#1d0002}.dark\:bg-\[\#3E3E3A\]{background-color:#3e3e3a}.dark\:bg-\[\#161615\]{background-color:#161615}.dark\:bg-\[\#eeeeec\]{background-color:#eeeeec}.dark\:text-\[\#1C1C1A\]{color:#1c1c1a}.dark\:text-\[\#A1A09A\]{color:#a1a09a}.dark\:text-\[\#EDEDEC\]{color:#ededec}.dark\:text-\[\#F61500\]{color:#f61500}.dark\:text-\[\#FF4433\]{color:#f43}.dark\:shadow-\[inset_0px_0px_0px_1px_\#fffaed2d\]{--tw-shadow:inset 0px 0px 0px 1px var(--tw-shadow-color,#fffaed2d);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.dark\:before\:border-\[\#3E3E3A\]:before{content:var(--tw-content);border-color:#3e3e3a}@media (hover:hover){.dark\:hover\:border-\[\#3E3E3A\]:hover{border-color:#3e3e3a}.dark\:hover\:border-\[\#62605b\]:hover{border-color:#62605b}.dark\:hover\:border-white:hover{border-color:var(--color-white)}.dark\:hover\:bg-white:hover{background-color:var(--color-white)}}}@starting-style{.starting\:translate-y-4{--tw-translate-y:calc(var(--spacing)*4);translate:var(--tw-translate-x)var(--tw-translate-y)}}@starting-style{.starting\:translate-y-6{--tw-translate-y:calc(var(--spacing)*6);translate:var(--tw-translate-x)var(--tw-translate-y)}}@starting-style{.starting\:opacity-0{opacity:0}}}@keyframes spin{to{transform:rotate(360deg)}}@keyframes ping{75%,to{opacity:0;transform:scale(2)}}@keyframes pulse{50%{opacity:.5}}@keyframes bounce{0%,to{animation-timing-function:cubic-bezier(.8,0,1,1);transform:translateY(-25%)}50%{animation-timing-function:cubic-bezier(0,0,.2,1);transform:none}}@property --tw-translate-x{syntax:"*";inherits:false;initial-value:0}@property --tw-translate-y{syntax:"*";inherits:false;initial-value:0}@property --tw-translate-z{syntax:"*";inherits:false;initial-value:0}@property --tw-rotate-x{syntax:"*";inherits:false;initial-value:rotateX(0)}@property --tw-rotate-y{syntax:"*";inherits:false;initial-value:rotateY(0)}@property --tw-rotate-z{syntax:"*";inherits:false;initial-value:rotateZ(0)}@property --tw-skew-x{syntax:"*";inherits:false;initial-value:skewX(0)}@property --tw-skew-y{syntax:"*";inherits:false;initial-value:skewY(0)}@property --tw-space-x-reverse{syntax:"*";inherits:false;initial-value:0}@property --tw-border-style{syntax:"*";inherits:false;initial-value:solid}@property --tw-leading{syntax:"*";inherits:false}@property --tw-font-weight{syntax:"*";inherits:false}@property --tw-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-shadow-color{syntax:"*";inherits:false}@property --tw-inset-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-inset-shadow-color{syntax:"*";inherits:false}@property --tw-ring-color{syntax:"*";inherits:false}@property --tw-ring-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-inset-ring-color{syntax:"*";inherits:false}@property --tw-inset-ring-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-ring-inset{syntax:"*";inherits:false}@property --tw-ring-offset-width{syntax:"<length>";inherits:false;initial-value:0}@property --tw-ring-offset-color{syntax:"*";inherits:false;initial-value:#fff}@property --tw-ring-offset-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-blur{syntax:"*";inherits:false}@property --tw-brightness{syntax:"*";inherits:false}@property --tw-contrast{syntax:"*";inherits:false}@property --tw-grayscale{syntax:"*";inherits:false}@property --tw-hue-rotate{syntax:"*";inherits:false}@property --tw-invert{syntax:"*";inherits:false}@property --tw-opacity{syntax:"*";inherits:false}@property --tw-saturate{syntax:"*";inherits:false}@property --tw-sepia{syntax:"*";inherits:false}@property --tw-drop-shadow{syntax:"*";inherits:false}@property --tw-duration{syntax:"*";inherits:false}@property --tw-content{syntax:"*";inherits:false;initial-value:""}
            </style>
        @endif
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
        <header class="w-full lg:max-w-4xl max-w-[335px] text-sm mb-6 not-has-[nav]:hidden">
            @if (Route::has('login'))
                <nav class="flex items-center justify-end gap-4">
                    @auth
                        <a
                            href="{{ url('/dashboard') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal"
                        >
                            Dashboard
                        </a>
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal"
                        >
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </header>
        <div class="flex items-center justify-center w-full transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0">
            <main class="flex max-w-[335px] w-full flex-col-reverse lg:max-w-4xl lg:flex-row">
                <div class="text-[13px] leading-[20px] flex-1 p-6 pb-12 lg:p-20 bg-white dark:bg-[#161615] dark:text-[#EDEDEC] shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d] rounded-bl-lg rounded-br-lg lg:rounded-tl-lg lg:rounded-br-none">
                    <h1 class="mb-1 font-medium">Let's get started</h1>
                    <p class="mb-2 text-[#706f6c] dark:text-[#A1A09A]">Laravel has an incredibly rich ecosystem. <br>We suggest starting with the following.</p>
                    <ul class="flex flex-col mb-4 lg:mb-6">
                        <li class="flex items-center gap-4 py-2 relative before:border-l before:border-[#e3e3e0] dark:before:border-[#3E3E3A] before:top-1/2 before:bottom-0 before:left-[0.4rem] before:absolute">
                            <span class="relative py-1 bg-white dark:bg-[#161615]">
                                <span class="flex items-center justify-center rounded-full bg-[#FDFDFC] dark:bg-[#161615] shadow-[0px_0px_1px_0px_rgba(0,0,0,0.03),0px_1px_2px_0px_rgba(0,0,0,0.06)] w-3.5 h-3.5 border dark:border-[#3E3E3A] border-[#e3e3e0]">
                                    <span class="rounded-full bg-[#dbdbd7] dark:bg-[#3E3E3A] w-1.5 h-1.5"></span>
                                </span>
                            </span>
                            <span>
                                Read the
                                <a href="https://laravel.com/docs" target="_blank" class="inline-flex items-center space-x-1 font-medium underline underline-offset-4 text-[#f53003] dark:text-[#FF4433] ml-1">
                                    <span>Documentation</span>
                                    <svg
                                        width="10"
                                        height="11"
                                        viewBox="0 0 10 11"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="w-2.5 h-2.5"
                                    >
                                        <path
                                            d="M7.70833 6.95834V2.79167H3.54167M2.5 8L7.5 3.00001"
                                            stroke="currentColor"
                                            stroke-linecap="square"
                                        />
                                    </svg>
                                </a>
                            </span>
                        </li>
                        <li class="flex items-center gap-4 py-2 relative before:border-l before:border-[#e3e3e0] dark:before:border-[#3E3E3A] before:bottom-1/2 before:top-0 before:left-[0.4rem] before:absolute">
                            <span class="relative py-1 bg-white dark:bg-[#161615]">
                                <span class="flex items-center justify-center rounded-full bg-[#FDFDFC] dark:bg-[#161615] shadow-[0px_0px_1px_0px_rgba(0,0,0,0.03),0px_1px_2px_0px_rgba(0,0,0,0.06)] w-3.5 h-3.5 border dark:border-[#3E3E3A] border-[#e3e3e0]">
                                    <span class="rounded-full bg-[#dbdbd7] dark:bg-[#3E3E3A] w-1.5 h-1.5"></span>
                                </span>
                            </span>
                            <span>
                                Watch video tutorials at
                                <a href="https://laracasts.com" target="_blank" class="inline-flex items-center space-x-1 font-medium underline underline-offset-4 text-[#f53003] dark:text-[#FF4433] ml-1">
                                    <span>Laracasts</span>
                                    <svg
                                        width="10"
                                        height="11"
                                        viewBox="0 0 10 11"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="w-2.5 h-2.5"
                                    >
                                        <path
                                            d="M7.70833 6.95834V2.79167H3.54167M2.5 8L7.5 3.00001"
                                            stroke="currentColor"
                                            stroke-linecap="square"
                                        />
                                    </svg>
                                </a>
                            </span>
                        </li>
                    </ul>
                    <ul class="flex gap-3 text-sm leading-normal">
                        <li>
                            <a href="https://cloud.laravel.com" target="_blank" class="inline-block dark:bg-[#eeeeec] dark:border-[#eeeeec] dark:text-[#1C1C1A] dark:hover:bg-white dark:hover:border-white hover:bg-black hover:border-black px-5 py-1.5 bg-[#1b1b18] rounded-sm border border-black text-white text-sm leading-normal">
                                Deploy now
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="bg-[#fff2f2] dark:bg-[#1D0002] relative lg:-ml-px -mb-px lg:mb-0 rounded-t-lg lg:rounded-t-none lg:rounded-r-lg aspect-[335/376] lg:aspect-auto w-full lg:w-[438px] shrink-0 overflow-hidden">
                    {{-- Laravel Logo --}}
                    <svg class="w-full text-[#F53003] dark:text-[#F61500] transition-all translate-y-0 opacity-100 max-w-none duration-750 starting:opacity-0 starting:translate-y-6" viewBox="0 0 438 104" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.2036 -3H0V102.197H49.5189V86.7187H17.2036V-3Z" fill="currentColor" />
                        <path d="M110.256 41.6337C108.061 38.1275 104.945 35.3731 100.905 33.3681C96.8667 31.3647 92.8016 30.3618 88.7131 30.3618C83.4247 30.3618 78.5885 31.3389 74.201 33.2923C69.8111 35.2456 66.0474 37.928 62.9059 41.3333C59.7643 44.7401 57.3198 48.6726 55.5754 53.1293C53.8287 57.589 52.9572 62.274 52.9572 67.1813C52.9572 72.1925 53.8287 76.8995 55.5754 81.3069C57.3191 85.7173 59.7636 89.6241 62.9059 93.0293C66.0474 96.4361 69.8119 99.1155 74.201 101.069C78.5885 103.022 83.4247 103.999 88.7131 103.999C92.8016 103.999 96.8667 102.997 100.905 100.994C104.945 98.9911 108.061 96.2359 110.256 92.7282V102.195H126.563V32.1642H110.256V41.6337ZM108.76 75.7472C107.762 78.4531 106.366 80.8078 104.572 82.8112C102.776 84.8161 100.606 86.4183 98.0637 87.6206C95.5202 88.823 92.7004 89.4238 89.6103 89.4238C86.5178 89.4238 83.7252 88.823 81.2324 87.6206C78.7388 86.4183 76.5949 84.8161 74.7998 82.8112C73.004 80.8078 71.6319 78.4531 70.6856 75.7472C69.7356 73.0421 69.2644 70.1868 69.2644 67.1821C69.2644 64.1758 69.7356 61.3205 70.6856 58.6154C71.6319 55.9102 73.004 53.5571 74.7998 51.5522C76.5949 49.5495 78.738 47.9451 81.2324 46.7427C83.7252 45.5404 86.5178 44.9396 89.6103 44.9396C92.7012 44.9396 95.5202 45.5404 98.0637 46.7427C100.606 47.9451 102.776 49.5487 104.572 51.5522C106.367 53.5571 107.762 55.9102 108.76 58.6154C109.756 61.3205 110.256 64.1758 110.256 67.1821C110.256 70.1868 109.756 73.0421 108.76 75.7472Z" fill="currentColor" />
                        <path d="M242.805 41.6337C240.611 38.1275 237.494 35.3731 233.455 33.3681C229.416 31.3647 225.351 30.3618 221.262 30.3618C215.974 30.3618 211.138 31.3389 206.75 33.2923C202.36 35.2456 198.597 37.928 195.455 41.3333C192.314 44.7401 189.869 48.6726 188.125 53.1293C186.378 57.589 185.507 62.274 185.507 67.1813C185.507 72.1925 186.378 76.8995 188.125 81.3069C189.868 85.7173 192.313 89.6241 195.455 93.0293C198.597 96.4361 202.361 99.1155 206.75 101.069C211.138 103.022 215.974 103.999 221.262 103.999C225.351 103.999 229.416 102.997 233.455 100.994C237.494 98.9911 240.611 96.2359 242.805 92.7282V102.195H259.112V32.1642H242.805V41.6337ZM241.31 75.7472C240.312 78.4531 238.916 80.8078 237.122 82.8112C235.326 84.8161 233.156 86.4183 230.614 87.6206C228.07 88.823 225.251 89.4238 222.16 89.4238C219.068 89.4238 216.275 88.823 213.782 87.6206C211.289 86.4183 209.145 84.8161 207.35 82.8112C205.554 80.8078 204.182 78.4531 203.236 75.7472C202.286 73.0421 201.814 70.1868 201.814 67.1821C201.814 64.1758 202.286 61.3205 203.236 58.6154C204.182 55.9102 205.554 53.5571 207.35 51.5522C209.145 49.5495 211.288 47.9451 213.782 46.7427C216.275 45.5404 219.068 44.9396 222.16 44.9396C225.251 44.9396 228.07 45.5404 230.614 46.7427C233.156 47.9451 235.326 49.5487 237.122 51.5522C238.917 53.5571 240.312 55.9102 241.31 58.6154C242.306 61.3205 242.806 64.1758 242.806 67.1821C242.805 70.1868 242.305 73.0421 241.31 75.7472Z" fill="currentColor" />
                        <path d="M438 -3H421.694V102.197H438V-3Z" fill="currentColor" />
                        <path d="M139.43 102.197H155.735V48.2834H183.712V32.1665H139.43V102.197Z" fill="currentColor" />
                        <path d="M324.49 32.1665L303.995 85.794L283.498 32.1665H266.983L293.748 102.197H314.242L341.006 32.1665H324.49Z" fill="currentColor" />
                        <path d="M376.571 30.3656C356.603 30.3656 340.797 46.8497 340.797 67.1828C340.797 89.6597 356.094 104 378.661 104C391.29 104 399.354 99.1488 409.206 88.5848L398.189 80.0226C398.183 80.031 389.874 90.9895 377.468 90.9895C363.048 90.9895 356.977 79.3111 356.977 73.269H411.075C413.917 50.1328 398.775 30.3656 376.571 30.3656ZM357.02 61.0967C357.145 59.7487 359.023 43.3761 376.442 43.3761C393.861 43.3761 395.978 59.7464 396.099 61.0967H357.02Z" fill="currentColor" />
                    </svg>

                    {{-- Light Mode 12 SVG --}}
                    <svg class="w-[448px] max-w-none relative -mt-[4.9rem] -ml-8 lg:ml-0 lg:-mt-[6.6rem] dark:hidden" viewBox="0 0 440 376" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4">
                            <path d="M188.263 355.73L188.595 355.73C195.441 348.845 205.766 339.761 219.569 328.477C232.93 317.193 242.978 308.205 249.714 301.511C256.34 294.626 260.867 287.358 263.296 279.708C265.725 272.058 264.565 264.121 259.816 255.896C254.516 246.716 247.062 239.352 237.454 233.805C227.957 228.067 217.908 225.198 207.307 225.198C196.927 225.197 190.136 227.97 186.934 233.516C183.621 238.872 184.726 246.331 190.247 255.894L125.647 255.891C116.371 239.825 112.395 225.481 113.72 212.858C115.265 200.235 121.559 190.481 132.602 183.596C143.754 176.52 158.607 172.982 177.159 172.983C196.594 172.984 215.863 176.523 234.968 183.6C253.961 190.486 271.299 200.241 286.98 212.864C302.661 225.488 315.14 239.833 324.416 255.899C333.03 270.817 336.841 283.918 335.847 295.203C335.075 306.487 331.376 316.336 324.75 324.751C318.346 333.167 308.408 343.494 294.936 355.734L377.094 355.737L405.917 405.656L217.087 405.649L188.263 355.73Z" fill="black" />
                            <path d="M9.11884 226.339L-13.7396 226.338L-42.7286 176.132L43.0733 176.135L175.595 405.649L112.651 405.647L9.11884 226.339Z" fill="black" />
                            <path d="M188.263 355.73L188.595 355.73C195.441 348.845 205.766 339.761 219.569 328.477C232.93 317.193 242.978 308.205 249.714 301.511C256.34 294.626 260.867 287.358 263.296 279.708C265.725 272.058 264.565 264.121 259.816 255.896C254.516 246.716 247.062 239.352 237.454 233.805C227.957 228.067 217.908 225.198 207.307 225.198C196.927 225.197 190.136 227.97 186.934 233.516C183.621 238.872 184.726 246.331 190.247 255.894L125.647 255.891C116.371 239.825 112.395 225.481 113.72 212.858C115.265 200.235 121.559 190.481 132.602 183.596C143.754 176.52 158.607 172.982 177.159 172.983C196.594 172.984 215.863 176.523 234.968 183.6C253.961 190.486 271.299 200.241 286.98 212.864C302.661 225.488 315.14 239.833 324.416 255.899C333.03 270.817 336.841 283.918 335.847 295.203C335.075 306.487 331.376 316.336 324.75 324.751C318.346 333.167 308.408 343.494 294.936 355.734L377.094 355.737L405.917 405.656L217.087 405.649L188.263 355.73Z" stroke="#1B1B18" stroke-width="1" />
                            <path d="M9.11884 226.339L-13.7396 226.338L-42.7286 176.132L43.0733 176.135L175.595 405.649L112.651 405.647L9.11884 226.339Z" stroke="#1B1B18" stroke-width="1" />
                            <path d="M204.592 327.449L204.923 327.449C211.769 320.564 222.094 311.479 235.897 300.196C249.258 288.912 259.306 279.923 266.042 273.23C272.668 266.345 277.195 259.077 279.624 251.427C282.053 243.777 280.893 235.839 276.145 227.615C270.844 218.435 263.39 211.071 253.782 205.524C244.285 199.786 234.236 196.917 223.635 196.916C213.255 196.916 206.464 199.689 203.262 205.235C199.949 210.59 201.054 218.049 206.575 227.612L141.975 227.61C132.699 211.544 128.723 197.2 130.048 184.577C131.593 171.954 137.887 162.2 148.93 155.315C160.083 148.239 174.935 144.701 193.487 144.702C212.922 144.703 232.192 148.242 251.296 155.319C270.289 162.205 287.627 171.96 303.308 184.583C318.989 197.207 331.468 211.552 340.745 227.618C349.358 242.536 353.169 255.637 352.175 266.921C351.403 278.205 347.704 288.055 341.078 296.47C334.674 304.885 324.736 315.213 311.264 327.453L393.422 327.456L422.246 377.375L233.415 377.368L204.592 327.449Z" fill="#F8B803" />
                            <path d="M25.447 198.058L2.58852 198.057L-26.4005 147.851L59.4015 147.854L191.923 377.368L128.979 377.365L25.447 198.058Z" fill="#F8B803" />
                            <path d="M204.592 327.449L204.923 327.449C211.769 320.564 222.094 311.479 235.897 300.196C249.258 288.912 259.306 279.923 266.042 273.23C272.668 266.345 277.195 259.077 279.624 251.427C282.053 243.777 280.893 235.839 276.145 227.615C270.844 218.435 263.39 211.071 253.782 205.524C244.285 199.786 234.236 196.917 223.635 196.916C213.255 196.916 206.464 199.689 203.262 205.235C199.949 210.59 201.054 218.049 206.575 227.612L141.975 227.61C132.699 211.544 128.723 197.2 130.048 184.577C131.593 171.954 137.887 162.2 148.93 155.315C160.083 148.239 174.935 144.701 193.487 144.702C212.922 144.703 232.192 148.242 251.296 155.319C270.289 162.205 287.627 171.96 303.308 184.583C318.989 197.207 331.468 211.552 340.745 227.618C349.358 242.536 353.169 255.637 352.175 266.921C351.403 278.205 347.704 288.055 341.078 296.47C334.674 304.885 324.736 315.213 311.264 327.453L393.422 327.456L422.246 377.375L233.415 377.368L204.592 327.449Z" stroke="#1B1B18" stroke-width="1" />
                            <path d="M25.447 198.058L2.58852 198.057L-26.4005 147.851L59.4015 147.854L191.923 377.368L128.979 377.365L25.447 198.058Z" stroke="#1B1B18" stroke-width="1" />
                        </g>
                        <g style="mix-blend-mode: hard-light" class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4">
                            <path d="M217.342 305.363L217.673 305.363C224.519 298.478 234.844 289.393 248.647 278.11C262.008 266.826 272.056 257.837 278.792 251.144C285.418 244.259 289.945 236.991 292.374 229.341C294.803 221.691 293.643 213.753 288.895 205.529C283.594 196.349 276.14 188.985 266.532 183.438C257.035 177.7 246.986 174.831 236.385 174.83C226.005 174.83 219.214 177.603 216.012 183.149C212.699 188.504 213.804 195.963 219.325 205.527L154.725 205.524C145.449 189.458 141.473 175.114 142.798 162.491C144.343 149.868 150.637 140.114 161.68 133.229C172.833 126.153 187.685 122.615 206.237 122.616C225.672 122.617 244.942 126.156 264.046 133.233C283.039 140.119 300.377 149.874 316.058 162.497C331.739 175.121 344.218 189.466 353.495 205.532C362.108 220.45 365.919 233.551 364.925 244.835C364.153 256.12 360.454 265.969 353.828 274.384C347.424 282.799 337.486 293.127 324.014 305.367L406.172 305.37L434.996 355.289L246.165 355.282L217.342 305.363Z" fill="#F0ACB8" />
                            <path d="M38.197 175.972L15.3385 175.971L-13.6505 125.765L72.1515 125.768L204.673 355.282L141.729 355.279L38.197 175.972Z" fill="#F0ACB8" />
                            <path d="M217.342 305.363L217.673 305.363C224.519 298.478 234.844 289.393 248.647 278.11C262.008 266.826 272.056 257.837 278.792 251.144C285.418 244.259 289.945 236.991 292.374 229.341C294.803 221.691 293.643 213.753 288.895 205.529C283.594 196.349 276.14 188.985 266.532 183.438C257.035 177.7 246.986 174.831 236.385 174.83C226.005 174.83 219.214 177.603 216.012 183.149C212.699 188.504 213.804 195.963 219.325 205.527L154.725 205.524C145.449 189.458 141.473 175.114 142.798 162.491C144.343 149.868 150.637 140.114 161.68 133.229C172.833 126.153 187.685 122.615 206.237 122.616C225.672 122.617 244.942 126.156 264.046 133.233C283.039 140.119 300.377 149.874 316.058 162.497C331.739 175.121 344.218 189.466 353.495 205.532C362.108 220.45 365.919 233.551 364.925 244.835C364.153 256.12 360.454 265.969 353.828 274.384C347.424 282.799 337.486 293.127 324.014 305.367L406.172 305.37L434.996 355.289L246.165 355.282L217.342 305.363Z" stroke="#1B1B18" stroke-width="1" />
                            <path d="M38.197 175.972L15.3385 175.971L-13.6505 125.765L72.1515 125.768L204.673 355.282L141.729 355.279L38.197 175.972Z" stroke="#1B1B18" stroke-width="1" />
                        </g>
                        <g style="mix-blend-mode: plus-darker" class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4">
                            <path d="M230.951 281.792L231.282 281.793C238.128 274.907 248.453 265.823 262.256 254.539C275.617 243.256 285.666 234.267 292.402 227.573C299.027 220.688 303.554 213.421 305.983 205.771C308.412 198.12 307.253 190.183 302.504 181.959C297.203 172.778 289.749 165.415 280.142 159.868C270.645 154.13 260.596 151.26 249.995 151.26C239.615 151.26 232.823 154.033 229.621 159.579C226.309 164.934 227.413 172.393 232.935 181.956L168.335 181.954C159.058 165.888 155.082 151.543 156.407 138.92C157.953 126.298 164.247 116.544 175.289 109.659C186.442 102.583 201.294 99.045 219.846 99.0457C239.281 99.0464 258.551 102.585 277.655 109.663C296.649 116.549 313.986 126.303 329.667 138.927C345.349 151.551 357.827 165.895 367.104 181.961C375.718 196.88 379.528 209.981 378.535 221.265C377.762 232.549 374.063 242.399 367.438 250.814C361.033 259.229 351.095 269.557 337.624 281.796L419.782 281.8L448.605 331.719L259.774 331.712L230.951 281.792Z" fill="#F3BEC7" />
                            <path d="M51.8063 152.402L28.9479 152.401L-0.0411453 102.195L85.7608 102.198L218.282 331.711L155.339 331.709L51.8063 152.402Z" fill="#F3BEC7" />
                            <path d="M230.951 281.792L231.282 281.793C238.128 274.907 248.453 265.823 262.256 254.539C275.617 243.256 285.666 234.267 292.402 227.573C299.027 220.688 303.554 213.421 305.983 205.771C308.412 198.12 307.253 190.183 302.504 181.959C297.203 172.778 289.749 165.415 280.142 159.868C270.645 154.13 260.596 151.26 249.995 151.26C239.615 151.26 232.823 154.033 229.621 159.579C226.309 164.934 227.413 172.393 232.935 181.956L168.335 181.954C159.058 165.888 155.082 151.543 156.407 138.92C157.953 126.298 164.247 116.544 175.289 109.659C186.442 102.583 201.294 99.045 219.846 99.0457C239.281 99.0464 258.551 102.585 277.655 109.663C296.649 116.549 313.986 126.303 329.667 138.927C345.349 151.551 357.827 165.895 367.104 181.961C375.718 196.88 379.528 209.981 378.535 221.265C377.762 232.549 374.063 242.399 367.438 250.814C361.033 259.229 351.095 269.557 337.624 281.796L419.782 281.8L448.605 331.719L259.774 331.712L230.951 281.792Z" stroke="#1B1B18" stroke-width="1" />
                            <path d="M51.8063 152.402L28.9479 152.401L-0.0411453 102.195L85.7608 102.198L218.282 331.711L155.339 331.709L51.8063 152.402Z" stroke="#1B1B18" stroke-width="1" />
                        </g>
                        <g class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4">
                            <path d="M188.467 355.363L188.798 355.363C195.644 348.478 205.969 339.393 219.772 328.11C233.133 316.826 243.181 307.837 249.917 301.144C253.696 297.217 256.792 293.166 259.205 288.991C261.024 285.845 262.455 282.628 263.499 279.341C265.928 271.691 264.768 263.753 260.02 255.529C254.719 246.349 247.265 238.985 237.657 233.438C228.16 227.7 218.111 224.831 207.51 224.83C197.13 224.83 190.339 227.603 187.137 233.149C183.824 238.504 184.929 245.963 190.45 255.527L125.851 255.524C116.574 239.458 112.598 225.114 113.923 212.491C114.615 206.836 116.261 201.756 118.859 197.253C122.061 191.704 126.709 187.03 132.805 183.229C143.958 176.153 158.81 172.615 177.362 172.616C196.797 172.617 216.067 176.156 235.171 183.233C254.164 190.119 271.502 199.874 287.183 212.497C302.864 225.121 315.343 239.466 324.62 255.532C333.233 270.45 337.044 283.551 336.05 294.835C335.46 303.459 333.16 311.245 329.151 318.194C327.915 320.337 326.515 322.4 324.953 324.384C318.549 332.799 308.611 343.127 295.139 355.367L377.297 355.37L406.121 405.289L217.29 405.282L188.467 355.363Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M9.32197 225.972L-13.5365 225.971L-42.5255 175.765L43.2765 175.768L175.798 405.282L112.854 405.279L9.32197 225.972Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M345.247 111.915C329.566 99.2919 312.229 89.5371 293.235 82.6512L235.167 183.228C254.161 190.114 271.498 199.869 287.179 212.492L345.247 111.915Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M382.686 154.964C373.41 138.898 360.931 124.553 345.25 111.93L287.182 212.506C302.863 225.13 315.342 239.475 324.618 255.541L382.686 154.964Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M293.243 82.6472C274.139 75.57 254.869 72.031 235.434 72.0303L177.366 172.607C196.801 172.608 216.071 176.147 235.175 183.224L293.243 82.6472Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M394.118 194.257C395.112 182.973 391.301 169.872 382.688 154.953L324.619 255.53C333.233 270.448 337.044 283.55 336.05 294.834L394.118 194.257Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M235.432 72.0311C216.88 72.0304 202.027 75.5681 190.875 82.6442L132.806 183.221C143.959 176.145 158.812 172.607 177.363 172.608L235.432 72.0311Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M265.59 124.25C276.191 124.251 286.24 127.12 295.737 132.858L237.669 233.435C228.172 227.697 218.123 224.828 207.522 224.827L265.59 124.25Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M295.719 132.859C305.326 138.406 312.78 145.77 318.081 154.95L260.013 255.527C254.712 246.347 247.258 238.983 237.651 233.436L295.719 132.859Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M387.218 217.608C391.227 210.66 393.527 202.874 394.117 194.25L336.049 294.827C335.459 303.451 333.159 311.237 329.15 318.185L387.218 217.608Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M245.211 132.577C248.413 127.03 255.204 124.257 265.584 124.258L207.516 224.835C197.136 224.834 190.345 227.607 187.143 233.154L245.211 132.577Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M318.094 154.945C322.842 163.17 324.002 171.107 321.573 178.757L263.505 279.334C265.934 271.684 264.774 263.746 260.026 255.522L318.094 154.945Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M176.925 96.6737C180.127 91.1249 184.776 86.4503 190.871 82.6499L132.803 183.227C126.708 187.027 122.059 191.702 118.857 197.25L176.925 96.6737Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M387.226 217.606C385.989 219.749 384.59 221.813 383.028 223.797L324.96 324.373C326.522 322.39 327.921 320.326 329.157 318.183L387.226 217.606Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M317.269 188.408C319.087 185.262 320.519 182.045 321.562 178.758L263.494 279.335C262.451 282.622 261.019 285.839 259.201 288.985L317.269 188.408Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M245.208 132.573C241.895 137.928 243 145.387 248.522 154.95L190.454 255.527C184.932 245.964 183.827 238.505 187.14 233.15L245.208 132.573Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M176.93 96.6719C174.331 101.175 172.686 106.255 171.993 111.91L113.925 212.487C114.618 206.831 116.263 201.752 118.862 197.249L176.93 96.6719Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M317.266 188.413C314.853 192.589 311.757 196.64 307.978 200.566L249.91 301.143C253.689 297.216 256.785 293.166 259.198 288.99L317.266 188.413Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M464.198 304.708L435.375 254.789L377.307 355.366L406.13 405.285L464.198 304.708Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M353.209 254.787C366.68 242.548 376.618 232.22 383.023 223.805L324.955 324.382C318.55 332.797 308.612 343.124 295.141 355.364L353.209 254.787Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M435.37 254.787L353.212 254.784L295.144 355.361L377.302 355.364L435.37 254.787Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M183.921 154.947L248.521 154.95L190.453 255.527L125.853 255.524L183.921 154.947Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M171.992 111.914C170.668 124.537 174.643 138.881 183.92 154.947L125.852 255.524C116.575 239.458 112.599 225.114 113.924 212.491L171.992 111.914Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M307.987 200.562C301.251 207.256 291.203 216.244 277.842 227.528L219.774 328.105C233.135 316.821 243.183 307.832 249.919 301.139L307.987 200.562Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M15.5469 75.1797L44.5359 125.386L-13.5321 225.963L-42.5212 175.756L15.5469 75.1797Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M277.836 227.536C264.033 238.82 253.708 247.904 246.862 254.789L188.794 355.366C195.64 348.481 205.965 339.397 219.768 328.113L277.836 227.536Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M275.358 304.706L464.189 304.713L406.12 405.29L217.29 405.283L275.358 304.706Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M44.5279 125.39L67.3864 125.39L9.31834 225.967L-13.5401 225.966L44.5279 125.39Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M101.341 75.1911L233.863 304.705L175.795 405.282L43.2733 175.768L101.341 75.1911ZM15.5431 75.19L-42.525 175.767L43.277 175.77L101.345 75.1932L15.5431 75.19Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M246.866 254.784L246.534 254.784L188.466 355.361L188.798 355.361L246.866 254.784Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M246.539 254.781L275.362 304.701L217.294 405.277L188.471 355.358L246.539 254.781Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M67.3906 125.391L170.923 304.698L112.855 405.275L9.32257 225.967L67.3906 125.391Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M170.921 304.699L233.865 304.701L175.797 405.278L112.853 405.276L170.921 304.699Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                        </g>
                        <g style="mix-blend-mode: hard-light" class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4">
                            <path d="M246.544 254.79L246.875 254.79C253.722 247.905 264.046 238.82 277.849 227.537C291.21 216.253 301.259 207.264 307.995 200.57C314.62 193.685 319.147 186.418 321.577 178.768C324.006 171.117 322.846 163.18 318.097 154.956C312.796 145.775 305.342 138.412 295.735 132.865C286.238 127.127 276.189 124.258 265.588 124.257C255.208 124.257 248.416 127.03 245.214 132.576C241.902 137.931 243.006 145.39 248.528 154.953L183.928 154.951C174.652 138.885 170.676 124.541 172 111.918C173.546 99.2946 179.84 89.5408 190.882 82.6559C202.035 75.5798 216.887 72.0421 235.439 72.0428C254.874 72.0435 274.144 75.5825 293.248 82.6598C312.242 89.5457 329.579 99.3005 345.261 111.924C360.942 124.548 373.421 138.892 382.697 154.958C391.311 169.877 395.121 182.978 394.128 194.262C393.355 205.546 389.656 215.396 383.031 223.811C376.627 232.226 366.688 242.554 353.217 254.794L435.375 254.797L464.198 304.716L275.367 304.709L246.544 254.79Z" fill="#F0ACB8" />
                            <path d="M246.544 254.79L246.875 254.79C253.722 247.905 264.046 238.82 277.849 227.537C291.21 216.253 301.259 207.264 307.995 200.57C314.62 193.685 319.147 186.418 321.577 178.768C324.006 171.117 322.846 163.18 318.097 154.956C312.796 145.775 305.342 138.412 295.735 132.865C286.238 127.127 276.189 124.258 265.588 124.257C255.208 124.257 248.416 127.03 245.214 132.576C241.902 137.931 243.006 145.39 248.528 154.953L183.928 154.951C174.652 138.885 170.676 124.541 172 111.918C173.546 99.2946 179.84 89.5408 190.882 82.6559C202.035 75.5798 216.887 72.0421 235.439 72.0428C254.874 72.0435 274.144 75.5825 293.248 82.6598C312.242 89.5457 329.579 99.3005 345.261 111.924C360.942 124.548 373.421 138.892 382.697 154.958C391.311 169.877 395.121 182.978 394.128 194.262C393.355 205.546 389.656 215.396 383.031 223.811C376.627 232.226 366.688 242.554 353.217 254.794L435.375 254.797L464.198 304.716L275.367 304.709L246.544 254.79Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="round" />
                        </g>
                        <g style="mix-blend-mode: hard-light" class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4">
                            <path d="M67.41 125.402L44.5515 125.401L15.5625 75.1953L101.364 75.1985L233.886 304.712L170.942 304.71L67.41 125.402Z" fill="#F0ACB8" />
                            <path d="M67.41 125.402L44.5515 125.401L15.5625 75.1953L101.364 75.1985L233.886 304.712L170.942 304.71L67.41 125.402Z" stroke="#1B1B18" stroke-width="1" />
                        </g>
                    </svg>

                    {{-- Dark Mode 12 SVG --}}
                    <svg class="w-[448px] max-w-none relative -mt-[4.9rem] -ml-8 lg:ml-0 lg:-mt-[6.6rem] hidden dark:block" viewBox="0 0 440 376" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4">
                            <path d="M188.263 355.73L188.595 355.73C195.441 348.845 205.766 339.761 219.569 328.477C232.93 317.193 242.978 308.205 249.714 301.511C256.34 294.626 260.867 287.358 263.296 279.708C265.725 272.058 264.565 264.121 259.816 255.896C254.516 246.716 247.062 239.352 237.454 233.805C227.957 228.067 217.908 225.198 207.307 225.198C196.927 225.197 190.136 227.97 186.934 233.516C183.621 238.872 184.726 246.331 190.247 255.894L125.647 255.891C116.371 239.825 112.395 225.481 113.72 212.858C115.265 200.235 121.559 190.481 132.602 183.596C143.754 176.52 158.607 172.982 177.159 172.983C196.594 172.984 215.863 176.523 234.968 183.6C253.961 190.486 271.299 200.241 286.98 212.864C302.661 225.488 315.14 239.833 324.416 255.899C333.03 270.817 336.841 283.918 335.847 295.203C335.075 306.487 331.376 316.336 324.75 324.751C318.346 333.167 308.408 343.494 294.936 355.734L377.094 355.737L405.917 405.656L217.087 405.649L188.263 355.73Z" fill="black"/>
                            <path d="M9.11884 226.339L-13.7396 226.338L-42.7286 176.132L43.0733 176.135L175.595 405.649L112.651 405.647L9.11884 226.339Z" fill="black"/>
                            <path d="M188.263 355.73L188.595 355.73C195.441 348.845 205.766 339.761 219.569 328.477C232.93 317.193 242.978 308.205 249.714 301.511C256.34 294.626 260.867 287.358 263.296 279.708C265.725 272.058 264.565 264.121 259.816 255.896C254.516 246.716 247.062 239.352 237.454 233.805C227.957 228.067 217.908 225.198 207.307 225.198C196.927 225.197 190.136 227.97 186.934 233.516C183.621 238.872 184.726 246.331 190.247 255.894L125.647 255.891C116.371 239.825 112.395 225.481 113.72 212.858C115.265 200.235 121.559 190.481 132.602 183.596C143.754 176.52 158.607 172.982 177.159 172.983C196.594 172.984 215.863 176.523 234.968 183.6C253.961 190.486 271.299 200.241 286.98 212.864C302.661 225.488 315.14 239.833 324.416 255.899C333.03 270.817 336.841 283.918 335.847 295.203C335.075 306.487 331.376 316.336 324.75 324.751C318.346 333.167 308.408 343.494 294.936 355.734L377.094 355.737L405.917 405.656L217.087 405.649L188.263 355.73Z" stroke="#FF750F" stroke-width="1"/>
                            <path d="M9.11884 226.339L-13.7396 226.338L-42.7286 176.132L43.0733 176.135L175.595 405.649L112.651 405.647L9.11884 226.339Z" stroke="#FF750F" stroke-width="1"/>
                            <path d="M204.592 327.449L204.923 327.449C211.769 320.564 222.094 311.479 235.897 300.196C249.258 288.912 259.306 279.923 266.042 273.23C272.668 266.345 277.195 259.077 279.624 251.427C282.053 243.777 280.893 235.839 276.145 227.615C270.844 218.435 263.39 211.071 253.782 205.524C244.285 199.786 234.236 196.917 223.635 196.916C213.255 196.916 206.464 199.689 203.262 205.235C199.949 210.59 201.054 218.049 206.575 227.612L141.975 227.61C132.699 211.544 128.723 197.2 130.048 184.577C131.593 171.954 137.887 162.2 148.93 155.315C160.083 148.239 174.935 144.701 193.487 144.702C212.922 144.703 232.192 148.242 251.296 155.319C270.289 162.205 287.627 171.96 303.308 184.583C318.989 197.207 331.468 211.552 340.745 227.618C349.358 242.536 353.169 255.637 352.175 266.921C351.403 278.205 347.704 288.055 341.078 296.47C334.674 304.885 324.736 315.213 311.264 327.453L393.422 327.456L422.246 377.375L233.415 377.368L204.592 327.449Z" fill="#391800"/>
                            <path d="M25.447 198.058L2.58852 198.057L-26.4005 147.851L59.4015 147.854L191.923 377.368L128.979 377.365L25.447 198.058Z" fill="#391800"/>
                            <path d="M204.592 327.449L204.923 327.449C211.769 320.564 222.094 311.479 235.897 300.196C249.258 288.912 259.306 279.923 266.042 273.23C272.668 266.345 277.195 259.077 279.624 251.427C282.053 243.777 280.893 235.839 276.145 227.615C270.844 218.435 263.39 211.071 253.782 205.524C244.285 199.786 234.236 196.917 223.635 196.916C213.255 196.916 206.464 199.689 203.262 205.235C199.949 210.59 201.054 218.049 206.575 227.612L141.975 227.61C132.699 211.544 128.723 197.2 130.048 184.577C131.593 171.954 137.887 162.2 148.93 155.315C160.083 148.239 174.935 144.701 193.487 144.702C212.922 144.703 232.192 148.242 251.296 155.319C270.289 162.205 287.627 171.96 303.308 184.583C318.989 197.207 331.468 211.552 340.745 227.618C349.358 242.536 353.169 255.637 352.175 266.921C351.403 278.205 347.704 288.055 341.078 296.47C334.674 304.885 324.736 315.213 311.264 327.453L393.422 327.456L422.246 377.375L233.415 377.368L204.592 327.449Z" stroke="#FF750F" stroke-width="1"/>
                            <path d="M25.447 198.058L2.58852 198.057L-26.4005 147.851L59.4015 147.854L191.923 377.368L128.979 377.365L25.447 198.058Z" stroke="#FF750F" stroke-width="1"/>
                        </g>
                        <g class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4" style="mix-blend-mode:hard-light">
                            <path d="M217.342 305.363L217.673 305.363C224.519 298.478 234.844 289.393 248.647 278.11C262.008 266.826 272.056 257.837 278.792 251.144C285.418 244.259 289.945 236.991 292.374 229.341C294.803 221.691 293.643 213.753 288.895 205.529C283.594 196.349 276.14 188.985 266.532 183.438C257.035 177.7 246.986 174.831 236.385 174.83C226.005 174.83 219.214 177.603 216.012 183.149C212.699 188.504 213.804 195.963 219.325 205.527L154.725 205.524C145.449 189.458 141.473 175.114 142.798 162.491C144.343 149.868 150.637 140.114 161.68 133.229C172.833 126.153 187.685 122.615 206.237 122.616C225.672 122.617 244.942 126.156 264.046 133.233C283.039 140.119 300.377 149.874 316.058 162.497C331.739 175.121 344.218 189.466 353.495 205.532C362.108 220.45 365.919 233.551 364.925 244.835C364.153 256.12 360.454 265.969 353.828 274.384C347.424 282.799 337.486 293.127 324.014 305.367L406.172 305.37L434.996 355.289L246.165 355.282L217.342 305.363Z" fill="#733000"/>
                            <path d="M38.197 175.972L15.3385 175.971L-13.6505 125.765L72.1515 125.768L204.673 355.282L141.729 355.279L38.197 175.972Z" fill="#733000"/>
                            <path d="M217.342 305.363L217.673 305.363C224.519 298.478 234.844 289.393 248.647 278.11C262.008 266.826 272.056 257.837 278.792 251.144C285.418 244.259 289.945 236.991 292.374 229.341C294.803 221.691 293.643 213.753 288.895 205.529C283.594 196.349 276.14 188.985 266.532 183.438C257.035 177.7 246.986 174.831 236.385 174.83C226.005 174.83 219.214 177.603 216.012 183.149C212.699 188.504 213.804 195.963 219.325 205.527L154.725 205.524C145.449 189.458 141.473 175.114 142.798 162.491C144.343 149.868 150.637 140.114 161.68 133.229C172.833 126.153 187.685 122.615 206.237 122.616C225.672 122.617 244.942 126.156 264.046 133.233C283.039 140.119 300.377 149.874 316.058 162.497C331.739 175.121 344.218 189.466 353.495 205.532C362.108 220.45 365.919 233.551 364.925 244.835C364.153 256.12 360.454 265.969 353.828 274.384C347.424 282.799 337.486 293.127 324.014 305.367L406.172 305.37L434.996 355.289L246.165 355.282L217.342 305.363Z" stroke="#FF750F" stroke-width="1"/>
                            <path d="M38.197 175.972L15.3385 175.971L-13.6505 125.765L72.1515 125.768L204.673 355.282L141.729 355.279L38.197 175.972Z" stroke="#FF750F" stroke-width="1"/>
                        </g>
                        <g class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4">
                            <path d="M217.342 305.363L217.673 305.363C224.519 298.478 234.844 289.393 248.647 278.11C262.008 266.826 272.056 257.837 278.792 251.144C285.418 244.259 289.945 236.991 292.374 229.341C294.803 221.691 293.643 213.753 288.895 205.529C283.594 196.349 276.14 188.985 266.532 183.438C257.035 177.7 246.986 174.831 236.385 174.83C226.005 174.83 219.214 177.603 216.012 183.149C212.699 188.504 213.804 195.963 219.325 205.527L154.726 205.524C145.449 189.458 141.473 175.114 142.798 162.491C144.343 149.868 150.637 140.114 161.68 133.229C172.833 126.153 187.685 122.615 206.237 122.616C225.672 122.617 244.942 126.156 264.046 133.233C283.039 140.119 300.377 149.874 316.058 162.497C331.739 175.121 344.218 189.466 353.495 205.532C362.108 220.45 365.919 233.551 364.925 244.835C364.153 256.12 360.454 265.969 353.828 274.384C347.424 282.799 337.486 293.127 324.014 305.367L406.172 305.37L434.996 355.289L246.165 355.282L217.342 305.363Z" stroke="#FF750F" stroke-width="1"/>
                            <path d="M38.197 175.972L15.3385 175.971L-13.6505 125.765L72.1515 125.768L204.673 355.282L141.729 355.279L38.197 175.972Z" stroke="#FF750F" stroke-width="1"/>
                        </g>
                        <g class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4">
                            <path d="M188.467 355.363L188.798 355.363C195.644 348.478 205.969 339.393 219.772 328.11C233.133 316.826 243.181 307.837 249.917 301.144C253.696 297.217 256.792 293.166 259.205 288.991C261.024 285.845 262.455 282.628 263.499 279.341C265.928 271.691 264.768 263.753 260.02 255.529C254.719 246.349 247.265 238.985 237.657 233.438C228.16 227.7 218.111 224.831 207.51 224.83C197.13 224.83 190.339 227.603 187.137 233.149C183.824 238.504 184.929 245.963 190.45 255.527L125.851 255.524C116.574 239.458 112.598 225.114 113.923 212.491C114.615 206.836 116.261 201.756 118.859 197.253C122.061 191.704 126.709 187.03 132.805 183.229C143.958 176.153 158.81 172.615 177.362 172.616C196.797 172.617 216.067 176.156 235.171 183.233C254.164 190.119 271.502 199.874 287.183 212.497C302.864 225.121 315.343 239.466 324.62 255.532C333.233 270.45 337.044 283.551 336.05 294.835C335.46 303.459 333.16 311.245 329.151 318.194C327.915 320.337 326.515 322.4 324.953 324.384C318.549 332.799 308.611 343.127 295.139 355.367L377.297 355.37L406.121 405.289L217.29 405.282L188.467 355.363Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M9.32197 225.972L-13.5365 225.971L-42.5255 175.765L43.2765 175.768L175.798 405.282L112.854 405.279L9.32197 225.972Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M345.247 111.915C329.566 99.2919 312.229 89.5371 293.235 82.6512L235.167 183.228C254.161 190.114 271.498 199.869 287.179 212.492L345.247 111.915Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M382.686 154.964C373.41 138.898 360.931 124.553 345.25 111.93L287.182 212.506C302.863 225.13 315.342 239.475 324.618 255.541L382.686 154.964Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M293.243 82.6472C274.139 75.57 254.869 72.031 235.434 72.0303L177.366 172.607C196.801 172.608 216.071 176.147 235.175 183.224L293.243 82.6472Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M394.118 194.257C395.112 182.973 391.301 169.872 382.688 154.953L324.619 255.53C333.233 270.448 337.044 283.55 336.05 294.834L394.118 194.257Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M235.432 72.0311C216.88 72.0304 202.027 75.5681 190.875 82.6442L132.806 183.221C143.959 176.145 158.812 172.607 177.363 172.608L235.432 72.0311Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M265.59 124.25C276.191 124.251 286.24 127.12 295.737 132.858L237.669 233.435C228.172 227.697 218.123 224.828 207.522 224.827L265.59 124.25Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M295.719 132.859C305.326 138.406 312.78 145.77 318.081 154.95L260.013 255.527C254.712 246.347 247.258 238.983 237.651 233.436L295.719 132.859Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M387.218 217.608C391.227 210.66 393.527 202.874 394.117 194.25L336.049 294.827C335.459 303.451 333.159 311.237 329.15 318.185L387.218 217.608Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M245.211 132.577C248.413 127.03 255.204 124.257 265.584 124.258L207.516 224.835C197.136 224.834 190.345 227.607 187.143 233.154L245.211 132.577Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M318.094 154.945C322.842 163.17 324.002 171.107 321.573 178.757L263.505 279.334C265.934 271.684 264.774 263.746 260.026 255.522L318.094 154.945Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M176.925 96.6737C180.127 91.1249 184.776 86.4503 190.871 82.6499L132.803 183.227C126.708 187.027 122.059 191.702 118.857 197.25L176.925 96.6737Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M387.226 217.606C385.989 219.749 384.59 221.813 383.028 223.797L324.96 324.373C326.522 322.39 327.921 320.326 329.157 318.183L387.226 217.606Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M317.269 188.408C319.087 185.262 320.519 182.045 321.562 178.758L263.494 279.335C262.451 282.622 261.019 285.839 259.201 288.985L317.269 188.408Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M245.208 132.573C241.895 137.928 243 145.387 248.522 154.95L190.454 255.527C184.932 245.964 183.827 238.505 187.14 233.15L245.208 132.573Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M176.93 96.6719C174.331 101.175 172.686 106.255 171.993 111.91L113.925 212.487C114.618 206.831 116.263 201.752 118.862 197.249L176.93 96.6719Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M317.266 188.413C314.853 192.589 311.757 196.64 307.978 200.566L249.91 301.143C253.689 297.216 256.785 293.166 259.198 288.99L317.266 188.413Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M464.198 304.708L435.375 254.789L377.307 355.366L406.13 405.285L464.198 304.708Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M353.209 254.787C366.68 242.548 376.618 232.22 383.023 223.805L324.955 324.382C318.55 332.797 308.612 343.124 295.141 355.364L353.209 254.787Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M435.37 254.787L353.212 254.784L295.144 355.361L377.302 355.364L435.37 254.787Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M183.921 154.947L248.521 154.95L190.453 255.527L125.853 255.524L183.921 154.947Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M171.992 111.914C170.668 124.537 174.643 138.881 183.92 154.947L125.852 255.524C116.575 239.458 112.599 225.114 113.924 212.491L171.992 111.914Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M307.987 200.562C301.251 207.256 291.203 216.244 277.842 227.528L219.774 328.105C233.135 316.821 243.183 307.832 249.919 301.139L307.987 200.562Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M15.5469 75.1797L44.5359 125.386L-13.5321 225.963L-42.5212 175.756L15.5469 75.1797Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M277.836 227.536C264.033 238.82 253.708 247.904 246.862 254.789L188.794 355.366C195.64 348.481 205.965 339.397 219.768 328.113L277.836 227.536Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M275.358 304.706L464.189 304.713L406.12 405.29L217.29 405.283L275.358 304.706Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M44.5279 125.39L67.3864 125.39L9.31834 225.967L-13.5401 225.966L44.5279 125.39Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M101.341 75.1911L233.863 304.705L175.795 405.282L43.2733 175.768L101.341 75.1911ZM15.5431 75.19L-42.525 175.767L43.277 175.77L101.345 75.1932L15.5431 75.19Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M246.866 254.784L246.534 254.784L188.466 355.361L188.798 355.361L246.866 254.784Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M246.539 254.781L275.362 304.701L217.294 405.277L188.471 355.358L246.539 254.781Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M67.3906 125.391L170.923 304.698L112.855 405.275L9.32257 225.967L67.3906 125.391Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M170.921 304.699L233.865 304.701L175.797 405.278L112.853 405.276L170.921 304.699Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                        </g>
                        <g class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4" style="mix-blend-mode:hard-light">
                            <path d="M246.544 254.79L246.875 254.79C253.722 247.905 264.046 238.82 277.849 227.537C291.21 216.253 301.259 207.264 307.995 200.57C314.62 193.685 319.147 186.418 321.577 178.768C324.006 171.117 322.846 163.18 318.097 154.956C312.796 145.775 305.342 138.412 295.735 132.865C286.238 127.127 276.189 124.258 265.588 124.257C255.208 124.257 248.416 127.03 245.214 132.576C241.902 137.931 243.006 145.39 248.528 154.953L183.928 154.951C174.652 138.885 170.676 124.541 172 111.918C173.546 99.2946 179.84 89.5408 190.882 82.6559C202.035 75.5798 216.887 72.0421 235.439 72.0428C254.874 72.0435 274.144 75.5825 293.248 82.6598C312.242 89.5457 329.579 99.3005 345.261 111.924C360.942 124.548 373.421 138.892 382.697 154.958C391.311 169.877 395.121 182.978 394.128 194.262C393.355 205.546 389.656 215.396 383.031 223.811C376.627 232.226 366.688 242.554 353.217 254.794L435.375 254.797L464.198 304.716L275.367 304.709L246.544 254.79Z" fill="#4B0600"/>
                            <path d="M246.544 254.79L246.875 254.79C253.722 247.905 264.046 238.82 277.849 227.537C291.21 216.253 301.259 207.264 307.995 200.57C314.62 193.685 319.147 186.418 321.577 178.768C324.006 171.117 322.846 163.18 318.097 154.956C312.796 145.775 305.342 138.412 295.735 132.865C286.238 127.127 276.189 124.258 265.588 124.257C255.208 124.257 248.416 127.03 245.214 132.576C241.902 137.931 243.006 145.39 248.528 154.953L183.928 154.951C174.652 138.885 170.676 124.541 172 111.918C173.546 99.2946 179.84 89.5408 190.882 82.6559C202.035 75.5798 216.887 72.0421 235.439 72.0428C254.874 72.0435 274.144 75.5825 293.248 82.6598C312.242 89.5457 329.579 99.3005 345.261 111.924C360.942 124.548 373.421 138.892 382.697 154.958C391.311 169.877 395.121 182.978 394.128 194.262C393.355 205.546 389.656 215.396 383.031 223.811C376.627 232.226 366.688 242.554 353.217 254.794L435.375 254.797L464.198 304.716L275.367 304.709L246.544 254.79Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="round"/>
                        </g>
                        <g class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4" style="mix-blend-mode:hard-light">
                            <path d="M67.41 125.402L44.5515 125.401L15.5625 75.1953L101.364 75.1985L233.886 304.712L170.942 304.71L67.41 125.402Z" fill="#4B0600"/>
                            <path d="M67.41 125.402L44.5515 125.401L15.5625 75.1953L101.364 75.1985L233.886 304.712L170.942 304.71L67.41 125.402Z" stroke="#FF750F" stroke-width="1"/>
                        </g>
                    </svg>
                    <div class="absolute inset-0 rounded-t-lg lg:rounded-t-none lg:rounded-r-lg shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d]"></div>
                </div>
            </main>
        </div>

        @if (Route::has('login'))
            <div class="h-14.5 hidden lg:block"></div>
        @endif
    </body>
</html>


<!DOCTYPE html><!--
    Template Name: Midone - Admin Dashboard Template
    Author: Left4code
    Website: http://www.left4code.com/
    Contact: muhammadrizki@left4code.com
    Purchase: https://themeforest.net/user/left4code/portfolio
    Renew Support: https://themeforest.net/user/left4code/portfolio
    License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
    -->
    <html xmlns="http://www.w3.org/1999/xhtml" class="opacity-0" lang="en"><!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="Koo2zWJKliRELq4FawEfkQPg3CJYusp6ppGFZw4O">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, midone Admin Template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="LEFT4CODE">
        <title>Dashboard - Midone - Tailwind Admin Dashboard Template</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="dist/css/vendors/tippy.css">
        <link rel="stylesheet" href="dist/css/vendors/litepicker.css">
        <link rel="stylesheet" href="dist/css/vendors/tiny-slider.css">
        <link rel="stylesheet" href="dist/css/themes/tinker/side-nav.css">
        <link rel="stylesheet" href="dist/css/vendors/leaflet.css">
        <link rel="stylesheet" href="dist/css/vendors/simplebar.css">
        <link rel="stylesheet" href="dist/css/components/mobile-menu.css">
        <link rel="stylesheet" href="dist/css/app.css"> <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body>
        <div>
            <div data-tw-backdrop="" aria-hidden="true" tabindex="-1" id="theme-switcher" class="modal group bg-black/60 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0 [&:not(.show)]:duration-[0s,0.2s] [&:not(.show)]:delay-[0.2s,0s] [&:not(.show)]:invisible [&:not(.show)]:opacity-0 [&.show]:visible [&.show]:opacity-100 [&.show]:duration-[0s,0.4s]">
                <div data-tw-merge="" class="w-[90%] ml-auto h-screen flex flex-col bg-white relative shadow-md transition-[margin-right] duration-[0.6s] -mr-[100%] group-[.show]:mr-0 dark:bg-darkmode-600 sm:w-[460px]"><a class="absolute inset-y-0 left-0 right-auto my-auto -ml-[60px] flex h-8 w-8 items-center justify-center rounded-full border border-white/90 bg-white/5 text-white/90 transition-all hover:rotate-180 hover:scale-105 hover:bg-white/10 focus:outline-none sm:-ml-[105px] sm:h-14 sm:w-14" data-tw-dismiss="modal" href="javascript:;">
                        <i data-tw-merge="" data-lucide="x" class="h-3 w-3 stroke-[1] sm:h-8 sm:w-8"></i>
                    </a>
                    <div data-tw-merge="" class="overflow-y-auto flex-1 p-0">
                        <div class="flex flex-col">
                            <div class="px-8 pt-6 pb-8">
                                <div class="text-base font-medium">Themes</div>
                                <div class="mt-0.5 text-slate-500">Choose your theme</div>
                                <div class="mt-5 grid grid-cols-2 gap-x-5 gap-y-3.5">
                                    <div>
                                        <a href="rubick-side-menu-dashboard-overview-1-page.html" class="h-28 cursor-pointer bg-slate-50 box p-1 block">
                                            <div class="w-full h-full overflow-hidden rounded-md image-fit">
                                                <img class="w-full h-full" src="dist/images/themes/rubick.png" alt="Midone - Admin Dashboard Template">
                                            </div>
                                        </a>
                                        <div class="mt-2.5 text-center text-xs capitalize">
                                            rubick
                                        </div>
                                    </div>
                                    <div>
                                        <a href="icewall-side-menu-dashboard-overview-1-page.html" class="h-28 cursor-pointer bg-slate-50 box p-1 block">
                                            <div class="w-full h-full overflow-hidden rounded-md image-fit">
                                                <img class="w-full h-full" src="dist/images/themes/icewall.png" alt="Midone - Admin Dashboard Template">
                                            </div>
                                        </a>
                                        <div class="mt-2.5 text-center text-xs capitalize">
                                            icewall
                                        </div>
                                    </div>
                                    <div>
                                        <a href="tinker-side-menu-dashboard-overview-1-page.html" class="h-28 cursor-pointer bg-slate-50 box p-1 block border-2 border-theme-1/60">
                                            <div class="w-full h-full overflow-hidden rounded-md image-fit">
                                                <img class="w-full h-full" src="dist/images/themes/tinker.png" alt="Midone - Admin Dashboard Template">
                                            </div>
                                        </a>
                                        <div class="mt-2.5 text-center text-xs capitalize">
                                            tinker
                                        </div>
                                    </div>
                                    <div>
                                        <a href="enigma-side-menu-dashboard-overview-1-page.html" class="h-28 cursor-pointer bg-slate-50 box p-1 block">
                                            <div class="w-full h-full overflow-hidden rounded-md image-fit">
                                                <img class="w-full h-full" src="dist/images/themes/enigma.png" alt="Midone - Admin Dashboard Template">
                                            </div>
                                        </a>
                                        <div class="mt-2.5 text-center text-xs capitalize">
                                            enigma
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-b border-dashed"></div>
                            <div class="px-8 pt-6 pb-8">
                                <div class="text-base font-medium">Layouts</div>
                                <div class="mt-0.5 text-slate-500">Choose your layout</div>
                                <div class="mt-5 grid grid-cols-3 gap-x-5 gap-y-3.5">
                                    <div>
                                        <a href="tinker-side-menu-dashboard-overview-1-page.html" class="h-24 cursor-pointer bg-slate-50 box p-1 block border-2 border-theme-1/60">
                                            <div class="w-full h-full overflow-hidden rounded-md">
                                                <img class="w-full h-full" src="dist/images/layouts/side-menu.png" alt="Midone - Admin Dashboard Template">
                                            </div>
                                        </a>
                                        <div class="mt-2.5 text-center text-xs capitalize">
                                            side menu
                                        </div>
                                    </div>
                                    <div>
                                        <a href="tinker-simple-menu-dashboard-overview-1-page.html" class="h-24 cursor-pointer bg-slate-50 box p-1 block">
                                            <div class="w-full h-full overflow-hidden rounded-md">
                                                <img class="w-full h-full" src="dist/images/layouts/simple-menu.png" alt="Midone - Admin Dashboard Template">
                                            </div>
                                        </a>
                                        <div class="mt-2.5 text-center text-xs capitalize">
                                            simple menu
                                        </div>
                                    </div>
                                    <div>
                                        <a href="tinker-top-menu-dashboard-overview-1-page.html" class="h-24 cursor-pointer bg-slate-50 box p-1 block">
                                            <div class="w-full h-full overflow-hidden rounded-md">
                                                <img class="w-full h-full" src="dist/images/layouts/top-menu.png" alt="Midone - Admin Dashboard Template">
                                            </div>
                                        </a>
                                        <div class="mt-2.5 text-center text-xs capitalize">
                                            top menu
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-b border-dashed"></div>
                            <div class="px-8 pt-6 pb-8">
                                <div class="text-base font-medium">Accent Colors</div>
                                <div class="mt-0.5 text-slate-500">
                                    Choose your accent color
                                </div>
                                <div class="mt-5 grid grid-cols-2 gap-3.5">
                                    <div>
                                        <a data-theme-color="default" class="h-14 cursor-pointer bg-slate-50 box p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                                            <div class="h-full overflow-hidden rounded-md">
                                                <div class="flex items-center h-full gap-1 -mx-2">
                                                    <div class="w-1/2 h-[200%] bg-theme-1 rotate-12 default"></div>
                                                    <div class="w-1/2 h-[200%] bg-theme-2 rotate-12 default"></div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div>
                                        <a data-theme-color="theme-1" class="h-14 cursor-pointer bg-slate-50 box p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                                            <div class="h-full overflow-hidden rounded-md">
                                                <div class="flex items-center h-full gap-1 -mx-2">
                                                    <div class="w-1/2 h-[200%] bg-theme-1 rotate-12 theme-1"></div>
                                                    <div class="w-1/2 h-[200%] bg-theme-2 rotate-12 theme-1"></div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div>
                                        <a data-theme-color="theme-2" class="h-14 cursor-pointer bg-slate-50 box p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                                            <div class="h-full overflow-hidden rounded-md">
                                                <div class="flex items-center h-full gap-1 -mx-2">
                                                    <div class="w-1/2 h-[200%] bg-theme-1 rotate-12 theme-2"></div>
                                                    <div class="w-1/2 h-[200%] bg-theme-2 rotate-12 theme-2"></div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div>
                                        <a data-theme-color="theme-3" class="h-14 cursor-pointer bg-slate-50 box p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                                            <div class="h-full overflow-hidden rounded-md">
                                                <div class="flex items-center h-full gap-1 -mx-2">
                                                    <div class="w-1/2 h-[200%] bg-theme-1 rotate-12 theme-3"></div>
                                                    <div class="w-1/2 h-[200%] bg-theme-2 rotate-12 theme-3"></div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div>
                                        <a data-theme-color="theme-4" class="h-14 cursor-pointer bg-slate-50 box p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                                            <div class="h-full overflow-hidden rounded-md">
                                                <div class="flex items-center h-full gap-1 -mx-2">
                                                    <div class="w-1/2 h-[200%] bg-theme-1 rotate-12 theme-4"></div>
                                                    <div class="w-1/2 h-[200%] bg-theme-2 rotate-12 theme-4"></div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="border-b border-dashed"></div>
                            <div class="px-8 pt-6 pb-8">
                                <div class="text-base font-medium">Appearance</div>
                                <div class="mt-0.5 text-slate-500">
                                    Choose your appearance
                                </div>
                                <div class="mt-5 grid grid-cols-2 gap-3.5">
                                    <div>
                                        <a data-appearance-mode="light" class="h-12 cursor-pointer bg-slate-50 box p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                                            <div class="h-full overflow-hidden rounded-md bg-slate-200"></div>
                                        </a>
                                        <div class="mt-2.5 text-center text-xs capitalize">
                                            Light
                                        </div>
                                    </div>
                                    <div>
                                        <a data-appearance-mode="dark" class="h-12 cursor-pointer bg-slate-50 box p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                                            <div class="h-full overflow-hidden rounded-md bg-slate-900"></div>
                                        </a>
                                        <div class="mt-2.5 text-center text-xs capitalize">
                                            Dark
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fixed bottom-0 right-0 z-50 flex items-center justify-center mb-5 mr-5 text-white rounded-full shadow-lg cursor-pointer h-14 w-14 bg-theme-1" data-tw-toggle="modal" data-tw-target="#theme-switcher">
                <i data-tw-merge="" data-lucide="settings" class="stroke-1.5 w-5 h-5 animate-spin"></i>
            </div>
        </div>
        <div class="tinker md:bg-black/[0.15] dark:bg-transparent relative py-5 px-5 md:py-0 sm:px-8 md:px-0 after:content-[''] after:bg-gradient-to-b after:from-theme-1 after:to-theme-2 dark:after:from-darkmode-800 dark:after:to-darkmode-800 after:fixed after:inset-0 after:z-[-2]">
            <!-- BEGIN: Mobile Menu -->
            <div class="mobile-menu group top-0 inset-x-0 fixed bg-theme-1/90 z-[60] border-b border-white/[0.08] dark:bg-darkmode-800/90 md:hidden before:content-[''] before:w-full before:h-screen before:z-10 before:fixed before:inset-x-0 before:bg-black/90 before:transition-opacity before:duration-200 before:ease-in-out before:invisible before:opacity-0 [&.mobile-menu--active]:before:visible [&.mobile-menu--active]:before:opacity-100">
                <div class="flex h-[70px] items-center px-3 sm:px-8">
                    <a class="mr-auto flex" href="">
                        <img class="w-6" src="dist/images/logo.svg" alt="Midone - Tailwind Admin Dashboard Template">
                    </a>
                    <a class="mobile-menu-toggler" href="#">
                        <i data-tw-merge="" data-lucide="bar-chart2" class="stroke-1.5 h-8 w-8 -rotate-90 transform text-white"></i>
                    </a>
                </div>
                <div class="scrollable h-screen z-20 top-0 left-0 w-[270px] -ml-[100%] bg-primary transition-all duration-300 ease-in-out dark:bg-darkmode-800 [&[data-simplebar]]:fixed [&_.simplebar-scrollbar]:before:bg-black/50 group-[.mobile-menu--active]:ml-0">
                    <a href="#" class="fixed top-0 right-0 mt-4 mr-4 transition-opacity duration-200 ease-in-out invisible opacity-0 group-[.mobile-menu--active]:visible group-[.mobile-menu--active]:opacity-100">
                        <i data-tw-merge="" data-lucide="x-circle" class="stroke-1.5 mobile-menu-toggler h-8 w-8 -rotate-90 transform text-white"></i>
                    </a>
                    <ul class="py-2">
                        <!-- BEGIN: First Child -->
                        <li>
                            <a class="menu menu--active" href="javascript:;">
                                <div class="menu__icon">
                                    <i data-tw-merge="" data-lucide="home" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="menu__title">
                                    Dashboard
                                    <div class="menu__sub-icon transform rotate-180">
                                        <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                </div>
                            </a>
                            <ul class="menu__sub-open">
                                <li>
                                    <a class="menu menu--active" href="tinker-side-menu-dashboard-overview-1-page.html">
                                        <div class="menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="menu__title">
                                            Overview 1
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="menu" href="tinker-side-menu-dashboard-overview-2-page.html">
                                        <div class="menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="menu__title">
                                            Overview 2
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="menu" href="tinker-side-menu-dashboard-overview-3-page.html">
                                        <div class="menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="menu__title">
                                            Overview 3
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="menu" href="tinker-side-menu-dashboard-overview-4-page.html">
                                        <div class="menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="menu__title">
                                            Overview 4
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="menu" href="javascript:;">
                                <div class="menu__icon">
                                    <i data-tw-merge="" data-lucide="shopping-bag" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="menu__title">
                                    E-Commerce
                                    <div class="menu__sub-icon ">
                                        <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a class="menu" href="tinker-side-menu-categories-page.html">
                                        <div class="menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="menu__title">
                                            Categories
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="menu" href="tinker-side-menu-add-product-page.html">
                                        <div class="menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="menu__title">
                                            Add Product
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="menu" href="javascript:;">
                                        <div class="menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="menu__title">
                                            Products
                                            <div class="menu__sub-icon ">
                                                <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <ul class="">
                                        <li>
                                            <a class="menu" href="tinker-side-menu-product-list-page.html">
                                                <div class="menu__icon">
                                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                                </div>
                                                <div class="menu__title">Product List</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="menu" href="tinker-side-menu-product-grid-page.html">
                                                <div class="menu__icon">
                                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                                </div>
                                                <div class="menu__title">Product Grid</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="menu" href="javascript:;">
                                        <div class="menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="menu__title">
                                            Transactions
                                            <div class="menu__sub-icon ">
                                                <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <ul class="">
                                        <li>
                                            <a class="menu" href="tinker-side-menu-transaction-list-page.html">
                                                <div class="menu__icon">
                                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                                </div>
                                                <div class="menu__title">Transaction List</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="menu" href="tinker-side-menu-transaction-detail-page.html">
                                                <div class="menu__icon">
                                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                                </div>
                                                <div class="menu__title">Transaction Detail</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="menu" href="javascript:;">
                                        <div class="menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="menu__title">
                                            Sellers
                                            <div class="menu__sub-icon ">
                                                <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <ul class="">
                                        <li>
                                            <a class="menu" href="tinker-side-menu-seller-list-page.html">
                                                <div class="menu__icon">
                                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                                </div>
                                                <div class="menu__title">Seller List</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="menu" href="tinker-side-menu-seller-detail-page.html">
                                                <div class="menu__icon">
                                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                                </div>
                                                <div class="menu__title">Seller Detail</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="menu" href="tinker-side-menu-reviews-page.html">
                                        <div class="menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="menu__title">
                                            Reviews
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="menu" href="tinker-side-menu-inbox-page.html">
                                <div class="menu__icon">
                                    <i data-tw-merge="" data-lucide="inbox" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="menu__title">
                                    Inbox
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="menu" href="tinker-side-menu-file-manager-page.html">
                                <div class="menu__icon">
                                    <i data-tw-merge="" data-lucide="hard-drive" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="menu__title">
                                    File Manager
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="menu" href="tinker-side-menu-point-of-sale-page.html">
                                <div class="menu__icon">
                                    <i data-tw-merge="" data-lucide="credit-card" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="menu__title">
                                    Point of Sale
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="menu" href="tinker-side-menu-chat-page.html">
                                <div class="menu__icon">
                                    <i data-tw-merge="" data-lucide="message-square" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="menu__title">
                                    Chat
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="menu" href="tinker-side-menu-post-page.html">
                                <div class="menu__icon">
                                    <i data-tw-merge="" data-lucide="file-text" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="menu__title">
                                    Post
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="menu" href="tinker-side-menu-calendar-page.html">
                                <div class="menu__icon">
                                    <i data-tw-merge="" data-lucide="calendar" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="menu__title">
                                    Calendar
                                </div>
                            </a>
                        </li>
                        <li class="menu__divider my-6"></li>
                        <li>
                            <a class="menu" href="javascript:;">
                                <div class="menu__icon">
                                    <i data-tw-merge="" data-lucide="edit" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="menu__title">
                                    Crud
                                    <div class="menu__sub-icon ">
                                        <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a class="menu" href="tinker-side-menu-crud-data-list-page.html">
                                        <div class="menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="menu__title">
                                            Data List
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="menu" href="tinker-side-menu-crud-form-page.html">
                                        <div class="menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="menu__title">
                                            Form
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="menu" href="javascript:;">
                                <div class="menu__icon">
                                    <i data-tw-merge="" data-lucide="users" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="menu__title">
                                    Users
                                    <div class="menu__sub-icon ">
                                        <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a class="menu" href="tinker-side-menu-users-layout-1-page.html">
                                        <div class="menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="menu__title">
                                            Layout 1
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="menu" href="tinker-side-menu-users-layout-2-page.html">
                                        <div class="menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="menu__title">
                                            Layout 2
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="menu" href="tinker-side-menu-users-layout-3-page.html">
                                        <div class="menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="menu__title">
                                            Layout 3
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="menu" href="javascript:;">
                                <div class="menu__icon">
                                    <i data-tw-merge="" data-lucide="trello" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="menu__title">
                                    Profile
                                    <div class="menu__sub-icon ">
                                        <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a class="menu" href="tinker-side-menu-profile-overview-1-page.html">
                                        <div class="menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="menu__title">
                                            Overview 1
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="menu" href="tinker-side-menu-profile-overview-2-page.html">
                                        <div class="menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="menu__title">
                                            Overview 2
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="menu" href="tinker-side-menu-profile-overview-3-page.html">
                                        <div class="menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="menu__title">
                                            Overview 3
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="menu" href="javascript:;">
                                <div class="menu__icon">
                                    <i data-tw-merge="" data-lucide="layout" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="menu__title">
                                    Pages
                                    <div class="menu__sub-icon ">
                                        <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a class="menu" href="javascript:;">
                                        <div class="menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="menu__title">
                                            Wizards
                                            <div class="menu__sub-icon ">
                                                <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <ul class="">
                                        <li>
                                            <a class="menu" href="tinker-side-menu-wizard-layout-1-page.html">
                                                <div class="menu__icon">
                                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                                </div>
                                                <div class="menu__title">Layout 1</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="menu" href="tinker-side-menu-wizard-layout-2-page.html">
                                                <div class="menu__icon">
                                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                                </div>
                                                <div class="menu__title">Layout 2</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="menu" href="tinker-side-menu-wizard-layout-3-page.html">
                                                <div class="menu__icon">
                                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                                </div>
                                                <div class="menu__title">Layout 3</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="menu" href="javascript:;">
                                        <div class="menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="menu__title">
                                            Blog
                                            <div class="menu__sub-icon ">
                                                <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <ul class="">
                                        <li>
                                            <a class="menu" href="tinker-side-menu-blog-layout-1-page.html">
                                                <div class="menu__icon">
                                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                                </div>
                                                <div class="menu__title">Layout 1</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="menu" href="tinker-side-menu-blog-layout-2-page.html">
                                                <div class="menu__icon">
                                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                                </div>
                                                <div class="menu__title">Layout 2</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="menu" href="tinker-side-menu-blog-layout-3-page.html">
                                                <div class="menu__icon">
                                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                                </div>
                                                <div class="menu__title">Layout 3</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="menu" href="javascript:;">
                                        <div class="menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="menu__title">
                                            Pricing
                                            <div class="menu__sub-icon ">
                                                <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <ul class="">
                                        <li>
                                            <a class="menu" href="tinker-side-menu-pricing-layout-1-page.html">
                                                <div class="menu__icon">
                                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                                </div>
                                                <div class="menu__title">Layout 1</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="menu" href="tinker-side-menu-pricing-layout-2-page.html">
                                                <div class="menu__icon">
                                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                                </div>
                                                <div class="menu__title">Layout 2</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="menu" href="javascript:;">
                                        <div class="menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="menu__title">
                                            Invoice
                                            <div class="menu__sub-icon ">
                                                <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <ul class="">
                                        <li>
                                            <a class="menu" href="tinker-side-menu-invoice-layout-1-page.html">
                                                <div class="menu__icon">
                                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                                </div>
                                                <div class="menu__title">Layout 1</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="menu" href="tinker-side-menu-invoice-layout-2-page.html">
                                                <div class="menu__icon">
                                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                                </div>
                                                <div class="menu__title">Layout 2</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="menu" href="javascript:;">
                                        <div class="menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="menu__title">
                                            FAQ
                                            <div class="menu__sub-icon ">
                                                <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <ul class="">
                                        <li>
                                            <a class="menu" href="tinker-side-menu-faq-layout-1-page.html">
                                                <div class="menu__icon">
                                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                                </div>
                                                <div class="menu__title">Layout 1</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="menu" href="tinker-side-menu-faq-layout-2-page.html">
                                                <div class="menu__icon">
                                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                                </div>
                                                <div class="menu__title">Layout 2</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="menu" href="tinker-side-menu-faq-layout-3-page.html">
                                                <div class="menu__icon">
                                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                                </div>
                                                <div class="menu__title">Layout 3</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="menu" href="tinker-side-menu-login-page.html">
                                        <div class="menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="menu__title">
                                            Login
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="menu" href="tinker-side-menu-register-page.html">
                                        <div class="menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="menu__title">
                                            Register
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="menu" href="tinker-side-menu-error-page-page.html">
                                        <div class="menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="menu__title">
                                            Error Page
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="menu" href="tinker-side-menu-update-profile-page.html">
                                        <div class="menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="menu__title">
                                            Update profile
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="menu" href="tinker-side-menu-change-password-page.html">
                                        <div class="menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="menu__title">
                                            Change Password
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu__divider my-6"></li>
                        <li>
                            <a class="menu" href="javascript:;">
                                <div class="menu__icon">
                                    <i data-tw-merge="" data-lucide="inbox" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="menu__title">
                                    Components
                                    <div class="menu__sub-icon ">
                                        <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a class="menu" href="javascript:;">
                                        <div class="menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="menu__title">
                                            Grid
                                            <div class="menu__sub-icon ">
                                                <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <ul class="">
                                        <li>
                                            <a class="menu" href="tinker-side-menu-regular-table-page.html">
                                                <div class="menu__icon">
                                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                                </div>
                                                <div class="menu__title">Regular Table</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="menu" href="tinker-side-menu-tabulator-page.html">
                                                <div class="menu__icon">
                                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                                </div>
                                                <div class="menu__title">Tabulator</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="menu" href="javascript:;">
                                        <div class="menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="menu__title">
                                            Overlay
                                            <div class="menu__sub-icon ">
                                                <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <ul class="">
                                        <li>
                                            <a class="menu" href="tinker-side-menu-modal-page.html">
                                                <div class="menu__icon">
                                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                                </div>
                                                <div class="menu__title">Modal</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="menu" href="tinker-side-menu-slide-over-page.html">
                                                <div class="menu__icon">
                                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                                </div>
                                                <div class="menu__title">Slide Over</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="menu" href="tinker-side-menu-notification-page.html">
                                                <div class="menu__icon">
                                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                                </div>
                                                <div class="menu__title">Notification</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="menu" href="tinker-side-menu-tab-page.html">
                                        <div class="menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="menu__title">
                                            Tab
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="menu" href="tinker-side-menu-accordion-page.html">
                                        <div class="menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="menu__title">
                                            Accordion
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="menu" href="tinker-side-menu-button-page.html">
                                        <div class="menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="menu__title">
                                            Button
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="menu" href="tinker-side-menu-alert-page.html">
                                        <div class="menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="menu__title">
                                            Alert
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="menu" href="tinker-side-menu-progress-bar-page.html">
                                        <div class="menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="menu__title">
                                            Progress Bar
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="menu" href="tinker-side-menu-tooltip-page.html">
                                        <div class="menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="menu__title">
                                            Tooltip
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="menu" href="tinker-side-menu-dropdown-page.html">
                                        <div class="menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="menu__title">
                                            Dropdown
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="menu" href="tinker-side-menu-typography-page.html">
                                        <div class="menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="menu__title">
                                            Typography
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="menu" href="tinker-side-menu-icon-page.html">
                                        <div class="menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="menu__title">
                                            Icon
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="menu" href="tinker-side-menu-loading-icon-page.html">
                                        <div class="menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="menu__title">
                                            Loading Icon
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="menu" href="javascript:;">
                                <div class="menu__icon">
                                    <i data-tw-merge="" data-lucide="sidebar" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="menu__title">
                                    Forms
                                    <div class="menu__sub-icon ">
                                        <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a class="menu" href="tinker-side-menu-regular-form-page.html">
                                        <div class="menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="menu__title">
                                            Regular Form
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="menu" href="tinker-side-menu-datepicker-page.html">
                                        <div class="menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="menu__title">
                                            Datepicker
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="menu" href="tinker-side-menu-tom-select-page.html">
                                        <div class="menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="menu__title">
                                            Tom Select
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="menu" href="tinker-side-menu-file-upload-page.html">
                                        <div class="menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="menu__title">
                                            File Upload
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="menu" href="javascript:;">
                                        <div class="menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="menu__title">
                                            Wysiwyg Editor
                                            <div class="menu__sub-icon ">
                                                <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <ul class="">
                                        <li>
                                            <a class="menu" href="tinker-side-menu-wysiwyg-editor-classic-page.html">
                                                <div class="menu__icon">
                                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                                </div>
                                                <div class="menu__title">Classic</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="menu" href="tinker-side-menu-wysiwyg-editor-inline-page.html">
                                                <div class="menu__icon">
                                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                                </div>
                                                <div class="menu__title">Inline</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="menu" href="tinker-side-menu-wysiwyg-editor-balloon-page.html">
                                                <div class="menu__icon">
                                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                                </div>
                                                <div class="menu__title">Balloon</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="menu" href="tinker-side-menu-wysiwyg-editor-balloon-block-page.html">
                                                <div class="menu__icon">
                                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                                </div>
                                                <div class="menu__title">Balloon Block</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="menu" href="tinker-side-menu-wysiwyg-editor-document-page.html">
                                                <div class="menu__icon">
                                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                                </div>
                                                <div class="menu__title">Document</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="menu" href="tinker-side-menu-validation-page.html">
                                        <div class="menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="menu__title">
                                            Validation
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="menu" href="javascript:;">
                                <div class="menu__icon">
                                    <i data-tw-merge="" data-lucide="hard-drive" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="menu__title">
                                    Widgets
                                    <div class="menu__sub-icon ">
                                        <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a class="menu" href="tinker-side-menu-chart-page.html">
                                        <div class="menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="menu__title">
                                            Chart
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="menu" href="tinker-side-menu-slider-page.html">
                                        <div class="menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="menu__title">
                                            Slider
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="menu" href="tinker-side-menu-image-zoom-page.html">
                                        <div class="menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="menu__title">
                                            Image Zoom
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- END: First Child -->
                    </ul>
                </div>
            </div>
            <!-- END: Mobile Menu -->
            <div class="mt-[4.7rem] flex overflow-hidden md:mt-0">
                <!-- BEGIN: Side Menu -->
                <nav class="side-nav z-10 hidden overflow-x-hidden px-5 pb-16 md:block md:w-[100px] xl:w-[250px]">
                    <a class="flex items-center pt-4 pl-5 mt-3 intro-x" href="">
                        <img class="w-6" src="dist/images/logo.svg" alt="Tinker Tailwind HTML Admin Template">
                        <span class="hidden ml-3 text-lg text-white xl:block">
                            Tinker
                        </span>
                    </a>
                    <div class="my-6 side-nav__divider"></div>
                    <ul>
                        <li>
                            <a href="javascript:;" class="side-menu side-menu--active">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="home" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Dashboard
                                    <div class="side-menu__sub-icon transform rotate-180">
                                        <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                </div>
                            </a>
                            <ul class="side-menu__sub-open">
                                <li>
                                    <a href="tinker-side-menu-dashboard-overview-1-page.html" class="side-menu side-menu--active">
                                        <div class="side-menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="side-menu__title">
                                            Overview 1
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="tinker-side-menu-dashboard-overview-2-page.html" class="side-menu">
                                        <div class="side-menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="side-menu__title">
                                            Overview 2
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="tinker-side-menu-dashboard-overview-3-page.html" class="side-menu">
                                        <div class="side-menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="side-menu__title">
                                            Overview 3
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="tinker-side-menu-dashboard-overview-4-page.html" class="side-menu">
                                        <div class="side-menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="side-menu__title">
                                            Overview 4
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="shopping-bag" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    E-Commerce
                                    <div class="side-menu__sub-icon ">
                                        <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="tinker-side-menu-categories-page.html" class="side-menu">
                                        <div class="side-menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="side-menu__title">
                                            Categories
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="tinker-side-menu-add-product-page.html" class="side-menu">
                                        <div class="side-menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="side-menu__title">
                                            Add Product
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;" class="side-menu">
                                        <div class="side-menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="side-menu__title">
                                            Products
                                            <div class="side-menu__sub-icon ">
                                                <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <ul class="">
                                        <li>
                                            <a href="tinker-side-menu-product-list-page.html" class="side-menu">
                                                <div class="side-menu__icon">
                                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                                </div>
                                                <div class="side-menu__title">
                                                    Product List
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="tinker-side-menu-product-grid-page.html" class="side-menu">
                                                <div class="side-menu__icon">
                                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                                </div>
                                                <div class="side-menu__title">
                                                    Product Grid
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:;" class="side-menu">
                                        <div class="side-menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="side-menu__title">
                                            Transactions
                                            <div class="side-menu__sub-icon ">
                                                <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <ul class="">
                                        <li>
                                            <a href="tinker-side-menu-transaction-list-page.html" class="side-menu">
                                                <div class="side-menu__icon">
                                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                                </div>
                                                <div class="side-menu__title">
                                                    Transaction List
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="tinker-side-menu-transaction-detail-page.html" class="side-menu">
                                                <div class="side-menu__icon">
                                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                                </div>
                                                <div class="side-menu__title">
                                                    Transaction Detail
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:;" class="side-menu">
                                        <div class="side-menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="side-menu__title">
                                            Sellers
                                            <div class="side-menu__sub-icon ">
                                                <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <ul class="">
                                        <li>
                                            <a href="tinker-side-menu-seller-list-page.html" class="side-menu">
                                                <div class="side-menu__icon">
                                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                                </div>
                                                <div class="side-menu__title">
                                                    Seller List
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="tinker-side-menu-seller-detail-page.html" class="side-menu">
                                                <div class="side-menu__icon">
                                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                                </div>
                                                <div class="side-menu__title">
                                                    Seller Detail
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="tinker-side-menu-reviews-page.html" class="side-menu">
                                        <div class="side-menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="side-menu__title">
                                            Reviews
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="tinker-side-menu-inbox-page.html" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="inbox" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Inbox
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="tinker-side-menu-file-manager-page.html" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="hard-drive" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    File Manager
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="tinker-side-menu-point-of-sale-page.html" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="credit-card" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Point of Sale
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="tinker-side-menu-chat-page.html" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="message-square" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Chat
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="tinker-side-menu-post-page.html" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="file-text" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Post
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="tinker-side-menu-calendar-page.html" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="calendar" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Calendar
                                </div>
                            </a>
                        </li>
                        <li class="my-6 side-nav__divider"></li>
                        <li>
                            <a href="javascript:;" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="edit" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Crud
                                    <div class="side-menu__sub-icon ">
                                        <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="tinker-side-menu-crud-data-list-page.html" class="side-menu">
                                        <div class="side-menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="side-menu__title">
                                            Data List
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="tinker-side-menu-crud-form-page.html" class="side-menu">
                                        <div class="side-menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="side-menu__title">
                                            Form
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="users" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Users
                                    <div class="side-menu__sub-icon ">
                                        <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="tinker-side-menu-users-layout-1-page.html" class="side-menu">
                                        <div class="side-menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="side-menu__title">
                                            Layout 1
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="tinker-side-menu-users-layout-2-page.html" class="side-menu">
                                        <div class="side-menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="side-menu__title">
                                            Layout 2
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="tinker-side-menu-users-layout-3-page.html" class="side-menu">
                                        <div class="side-menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="side-menu__title">
                                            Layout 3
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="trello" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Profile
                                    <div class="side-menu__sub-icon ">
                                        <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="tinker-side-menu-profile-overview-1-page.html" class="side-menu">
                                        <div class="side-menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="side-menu__title">
                                            Overview 1
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="tinker-side-menu-profile-overview-2-page.html" class="side-menu">
                                        <div class="side-menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="side-menu__title">
                                            Overview 2
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="tinker-side-menu-profile-overview-3-page.html" class="side-menu">
                                        <div class="side-menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="side-menu__title">
                                            Overview 3
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="layout" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Pages
                                    <div class="side-menu__sub-icon ">
                                        <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="javascript:;" class="side-menu">
                                        <div class="side-menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="side-menu__title">
                                            Wizards
                                            <div class="side-menu__sub-icon ">
                                                <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <ul class="">
                                        <li>
                                            <a href="tinker-side-menu-wizard-layout-1-page.html" class="side-menu">
                                                <div class="side-menu__icon">
                                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                                </div>
                                                <div class="side-menu__title">
                                                    Layout 1
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="tinker-side-menu-wizard-layout-2-page.html" class="side-menu">
                                                <div class="side-menu__icon">
                                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                                </div>
                                                <div class="side-menu__title">
                                                    Layout 2
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="tinker-side-menu-wizard-layout-3-page.html" class="side-menu">
                                                <div class="side-menu__icon">
                                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                                </div>
                                                <div class="side-menu__title">
                                                    Layout 3
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:;" class="side-menu">
                                        <div class="side-menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="side-menu__title">
                                            Blog
                                            <div class="side-menu__sub-icon ">
                                                <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <ul class="">
                                        <li>
                                            <a href="tinker-side-menu-blog-layout-1-page.html" class="side-menu">
                                                <div class="side-menu__icon">
                                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                                </div>
                                                <div class="side-menu__title">
                                                    Layout 1
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="tinker-side-menu-blog-layout-2-page.html" class="side-menu">
                                                <div class="side-menu__icon">
                                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                                </div>
                                                <div class="side-menu__title">
                                                    Layout 2
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="tinker-side-menu-blog-layout-3-page.html" class="side-menu">
                                                <div class="side-menu__icon">
                                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                                </div>
                                                <div class="side-menu__title">
                                                    Layout 3
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:;" class="side-menu">
                                        <div class="side-menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="side-menu__title">
                                            Pricing
                                            <div class="side-menu__sub-icon ">
                                                <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <ul class="">
                                        <li>
                                            <a href="tinker-side-menu-pricing-layout-1-page.html" class="side-menu">
                                                <div class="side-menu__icon">
                                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                                </div>
                                                <div class="side-menu__title">
                                                    Layout 1
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="tinker-side-menu-pricing-layout-2-page.html" class="side-menu">
                                                <div class="side-menu__icon">
                                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                                </div>
                                                <div class="side-menu__title">
                                                    Layout 2
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:;" class="side-menu">
                                        <div class="side-menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="side-menu__title">
                                            Invoice
                                            <div class="side-menu__sub-icon ">
                                                <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <ul class="">
                                        <li>
                                            <a href="tinker-side-menu-invoice-layout-1-page.html" class="side-menu">
                                                <div class="side-menu__icon">
                                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                                </div>
                                                <div class="side-menu__title">
                                                    Layout 1
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="tinker-side-menu-invoice-layout-2-page.html" class="side-menu">
                                                <div class="side-menu__icon">
                                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                                </div>
                                                <div class="side-menu__title">
                                                    Layout 2
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:;" class="side-menu">
                                        <div class="side-menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="side-menu__title">
                                            FAQ
                                            <div class="side-menu__sub-icon ">
                                                <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <ul class="">
                                        <li>
                                            <a href="tinker-side-menu-faq-layout-1-page.html" class="side-menu">
                                                <div class="side-menu__icon">
                                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                                </div>
                                                <div class="side-menu__title">
                                                    Layout 1
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="tinker-side-menu-faq-layout-2-page.html" class="side-menu">
                                                <div class="side-menu__icon">
                                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                                </div>
                                                <div class="side-menu__title">
                                                    Layout 2
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="tinker-side-menu-faq-layout-3-page.html" class="side-menu">
                                                <div class="side-menu__icon">
                                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                                </div>
                                                <div class="side-menu__title">
                                                    Layout 3
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="tinker-side-menu-login-page.html" class="side-menu">
                                        <div class="side-menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="side-menu__title">
                                            Login
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="tinker-side-menu-register-page.html" class="side-menu">
                                        <div class="side-menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="side-menu__title">
                                            Register
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="tinker-side-menu-error-page-page.html" class="side-menu">
                                        <div class="side-menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="side-menu__title">
                                            Error Page
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="tinker-side-menu-update-profile-page.html" class="side-menu">
                                        <div class="side-menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="side-menu__title">
                                            Update profile
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="tinker-side-menu-change-password-page.html" class="side-menu">
                                        <div class="side-menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="side-menu__title">
                                            Change Password
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="my-6 side-nav__divider"></li>
                        <li>
                            <a href="javascript:;" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="inbox" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Components
                                    <div class="side-menu__sub-icon ">
                                        <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="javascript:;" class="side-menu">
                                        <div class="side-menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="side-menu__title">
                                            Grid
                                            <div class="side-menu__sub-icon ">
                                                <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <ul class="">
                                        <li>
                                            <a href="tinker-side-menu-regular-table-page.html" class="side-menu">
                                                <div class="side-menu__icon">
                                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                                </div>
                                                <div class="side-menu__title">
                                                    Regular Table
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="tinker-side-menu-tabulator-page.html" class="side-menu">
                                                <div class="side-menu__icon">
                                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                                </div>
                                                <div class="side-menu__title">
                                                    Tabulator
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:;" class="side-menu">
                                        <div class="side-menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="side-menu__title">
                                            Overlay
                                            <div class="side-menu__sub-icon ">
                                                <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <ul class="">
                                        <li>
                                            <a href="tinker-side-menu-modal-page.html" class="side-menu">
                                                <div class="side-menu__icon">
                                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                                </div>
                                                <div class="side-menu__title">
                                                    Modal
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="tinker-side-menu-slide-over-page.html" class="side-menu">
                                                <div class="side-menu__icon">
                                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                                </div>
                                                <div class="side-menu__title">
                                                    Slide Over
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="tinker-side-menu-notification-page.html" class="side-menu">
                                                <div class="side-menu__icon">
                                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                                </div>
                                                <div class="side-menu__title">
                                                    Notification
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="tinker-side-menu-tab-page.html" class="side-menu">
                                        <div class="side-menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="side-menu__title">
                                            Tab
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="tinker-side-menu-accordion-page.html" class="side-menu">
                                        <div class="side-menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="side-menu__title">
                                            Accordion
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="tinker-side-menu-button-page.html" class="side-menu">
                                        <div class="side-menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="side-menu__title">
                                            Button
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="tinker-side-menu-alert-page.html" class="side-menu">
                                        <div class="side-menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="side-menu__title">
                                            Alert
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="tinker-side-menu-progress-bar-page.html" class="side-menu">
                                        <div class="side-menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="side-menu__title">
                                            Progress Bar
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="tinker-side-menu-tooltip-page.html" class="side-menu">
                                        <div class="side-menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="side-menu__title">
                                            Tooltip
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="tinker-side-menu-dropdown-page.html" class="side-menu">
                                        <div class="side-menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="side-menu__title">
                                            Dropdown
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="tinker-side-menu-typography-page.html" class="side-menu">
                                        <div class="side-menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="side-menu__title">
                                            Typography
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="tinker-side-menu-icon-page.html" class="side-menu">
                                        <div class="side-menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="side-menu__title">
                                            Icon
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="tinker-side-menu-loading-icon-page.html" class="side-menu">
                                        <div class="side-menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="side-menu__title">
                                            Loading Icon
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="sidebar" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Forms
                                    <div class="side-menu__sub-icon ">
                                        <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="tinker-side-menu-regular-form-page.html" class="side-menu">
                                        <div class="side-menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="side-menu__title">
                                            Regular Form
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="tinker-side-menu-datepicker-page.html" class="side-menu">
                                        <div class="side-menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="side-menu__title">
                                            Datepicker
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="tinker-side-menu-tom-select-page.html" class="side-menu">
                                        <div class="side-menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="side-menu__title">
                                            Tom Select
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="tinker-side-menu-file-upload-page.html" class="side-menu">
                                        <div class="side-menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="side-menu__title">
                                            File Upload
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;" class="side-menu">
                                        <div class="side-menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="side-menu__title">
                                            Wysiwyg Editor
                                            <div class="side-menu__sub-icon ">
                                                <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <ul class="">
                                        <li>
                                            <a href="tinker-side-menu-wysiwyg-editor-classic-page.html" class="side-menu">
                                                <div class="side-menu__icon">
                                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                                </div>
                                                <div class="side-menu__title">
                                                    Classic
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="tinker-side-menu-wysiwyg-editor-inline-page.html" class="side-menu">
                                                <div class="side-menu__icon">
                                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                                </div>
                                                <div class="side-menu__title">
                                                    Inline
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="tinker-side-menu-wysiwyg-editor-balloon-page.html" class="side-menu">
                                                <div class="side-menu__icon">
                                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                                </div>
                                                <div class="side-menu__title">
                                                    Balloon
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="tinker-side-menu-wysiwyg-editor-balloon-block-page.html" class="side-menu">
                                                <div class="side-menu__icon">
                                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                                </div>
                                                <div class="side-menu__title">
                                                    Balloon Block
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="tinker-side-menu-wysiwyg-editor-document-page.html" class="side-menu">
                                                <div class="side-menu__icon">
                                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                                </div>
                                                <div class="side-menu__title">
                                                    Document
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="tinker-side-menu-validation-page.html" class="side-menu">
                                        <div class="side-menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="side-menu__title">
                                            Validation
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="hard-drive" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Widgets
                                    <div class="side-menu__sub-icon ">
                                        <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="tinker-side-menu-chart-page.html" class="side-menu">
                                        <div class="side-menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="side-menu__title">
                                            Chart
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="tinker-side-menu-slider-page.html" class="side-menu">
                                        <div class="side-menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="side-menu__title">
                                            Slider
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="tinker-side-menu-image-zoom-page.html" class="side-menu">
                                        <div class="side-menu__icon">
                                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="side-menu__title">
                                            Image Zoom
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- END: Side Menu -->
                <!-- BEGIN: Content -->
                <div class="rounded-[30px] md:rounded-[35px/50px_0px_0px_0px] min-w-0 min-h-screen max-w-full md:max-w-none bg-slate-100 flex-1 pb-10 px-4 md:px-6 relative md:ml-4 dark:bg-darkmode-700 before:content-[''] before:w-full before:h-px before:block after:content-[''] after:z-[-1] after:rounded-[40px_0px_0px_0px] after:w-full after:inset-y-0 after:absolute after:left-0 after:bg-white/10 after:mt-8 after:-ml-4 after:dark:bg-darkmode-400/50 after:hidden md:after:block">
                    <!-- BEGIN: Top Bar -->
                    <div class="relative z-[51] flex h-[67px] items-center border-b border-slate-200">
                        <!-- BEGIN: Breadcrumb -->
                        <nav aria-label="breadcrumb" class="flex -intro-x mr-auto hidden sm:flex">
                            <ol class="flex items-center text-theme-1 dark:text-slate-300">
                                <li class="">
                                    <a href="">Application</a>
                                </li>
                                <li class="relative ml-5 pl-0.5 before:content-[''] before:w-[14px] before:h-[14px] before:bg-chevron-black before:transform before:rotate-[-90deg] before:bg-[length:100%] before:-ml-[1.125rem] before:absolute before:my-auto before:inset-y-0 dark:before:bg-chevron-white text-slate-800 cursor-text dark:text-slate-400">
                                    <a href="">Dashboard</a>
                                </li>
                            </ol>
                        </nav>
                        <!-- END: Breadcrumb -->
                        <!-- BEGIN: Search -->
                        <div class="search intro-x relative mr-3 sm:mr-6">
                            <div class="relative hidden sm:block">
                                <input data-tw-merge="" type="text" placeholder="Search..." class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent ease-in-out text-sm placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-opacity-40 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 w-56 rounded-full border-transparent bg-slate-300/50 pr-8 shadow-none transition-[width] duration-300 focus:w-72 focus:border-transparent dark:bg-darkmode-400/70">
                                <i data-tw-merge="" data-lucide="search" class="stroke-1.5 w-5 h-5 absolute inset-y-0 right-0 my-auto mr-3 text-slate-600 dark:text-slate-500"></i>
                            </div>
                            <a class="relative text-slate-600 sm:hidden" href="">
                                <i data-tw-merge="" data-lucide="search" class="stroke-1.5 w-5 h-5 dark:text-slate-500"></i>
                            </a>
                            <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150" data-enter-from="mt-5 invisible opacity-0 translate-y-1" data-enter-to="mt-[3px] visible opacity-100 translate-y-0" data-leave="transition-all ease-linear duration-150" data-leave-from="mt-[3px] visible opacity-100 translate-y-0" data-leave-to="mt-5 invisible opacity-0 translate-y-1" class="search-result absolute right-0 z-10 mt-[3px] hidden">
                                <div class="box w-[450px] p-5">
                                    <div class="mb-2 font-medium">Pages</div>
                                    <div class="mb-5">
                                        <a class="flex items-center" href="">
                                            <div class="flex h-8 w-8 items-center justify-center rounded-full bg-success/20 text-success dark:bg-success/10">
                                                <i data-tw-merge="" data-lucide="inbox" class="stroke-1.5 h-4 w-4"></i>
                                            </div>
                                            <div class="ml-3">Mail Settings</div>
                                        </a>
                                        <a class="mt-2 flex items-center" href="">
                                            <div class="flex h-8 w-8 items-center justify-center rounded-full bg-pending/10 text-pending">
                                                <i data-tw-merge="" data-lucide="users" class="stroke-1.5 h-4 w-4"></i>
                                            </div>
                                            <div class="ml-3">Users & Permissions</div>
                                        </a>
                                        <a class="mt-2 flex items-center" href="">
                                            <div class="flex h-8 w-8 items-center justify-center rounded-full bg-primary/10 text-primary/80 dark:bg-primary/20">
                                                <i data-tw-merge="" data-lucide="credit-card" class="stroke-1.5 h-4 w-4"></i>
                                            </div>
                                            <div class="ml-3">Transactions Report</div>
                                        </a>
                                    </div>
                                    <div class="mb-2 font-medium">Users</div>
                                    <div class="mb-5">
                                        <a class="mt-2 flex items-center" href="">
                                            <div class="image-fit h-8 w-8">
                                                <img class="rounded-full" src="dist/images/fakers/profile-10.jpg" alt="Midone Tailwind HTML Admin Template">
                                            </div>
                                            <div class="ml-3">Russell Crowe</div>
                                            <div class="ml-auto w-48 truncate text-right text-xs text-slate-500">
                                                russellcrowe@left4code.com
                                            </div>
                                        </a>
                                        <a class="mt-2 flex items-center" href="">
                                            <div class="image-fit h-8 w-8">
                                                <img class="rounded-full" src="dist/images/fakers/profile-15.jpg" alt="Midone Tailwind HTML Admin Template">
                                            </div>
                                            <div class="ml-3">Kevin Spacey</div>
                                            <div class="ml-auto w-48 truncate text-right text-xs text-slate-500">
                                                kevinspacey@left4code.com
                                            </div>
                                        </a>
                                        <a class="mt-2 flex items-center" href="">
                                            <div class="image-fit h-8 w-8">
                                                <img class="rounded-full" src="dist/images/fakers/profile-1.jpg" alt="Midone Tailwind HTML Admin Template">
                                            </div>
                                            <div class="ml-3">Arnold Schwarzenegger</div>
                                            <div class="ml-auto w-48 truncate text-right text-xs text-slate-500">
                                                arnoldschwarzenegger@left4code.com
                                            </div>
                                        </a>
                                        <a class="mt-2 flex items-center" href="">
                                            <div class="image-fit h-8 w-8">
                                                <img class="rounded-full" src="dist/images/fakers/profile-4.jpg" alt="Midone Tailwind HTML Admin Template">
                                            </div>
                                            <div class="ml-3">Denzel Washington</div>
                                            <div class="ml-auto w-48 truncate text-right text-xs text-slate-500">
                                                denzelwashington@left4code.com
                                            </div>
                                        </a>
                                    </div>
                                    <div class="mb-2 font-medium">Products</div>
                                    <a class="mt-2 flex items-center" href="">
                                        <div class="image-fit h-8 w-8">
                                            <img class="rounded-full" src="dist/images/fakers/preview-14.jpg" alt="Midone Tailwind HTML Admin Template">
                                        </div>
                                        <div class="ml-3">Samsung Q90 QLED TV</div>
                                        <div class="ml-auto w-48 truncate text-right text-xs text-slate-500">
                                            Electronic
                                        </div>
                                    </a>
                                    <a class="mt-2 flex items-center" href="">
                                        <div class="image-fit h-8 w-8">
                                            <img class="rounded-full" src="dist/images/fakers/preview-11.jpg" alt="Midone Tailwind HTML Admin Template">
                                        </div>
                                        <div class="ml-3">Apple MacBook Pro 13</div>
                                        <div class="ml-auto w-48 truncate text-right text-xs text-slate-500">
                                            PC & Laptop
                                        </div>
                                    </a>
                                    <a class="mt-2 flex items-center" href="">
                                        <div class="image-fit h-8 w-8">
                                            <img class="rounded-full" src="dist/images/fakers/preview-8.jpg" alt="Midone Tailwind HTML Admin Template">
                                        </div>
                                        <div class="ml-3">Samsung Galaxy S20 Ultra</div>
                                        <div class="ml-auto w-48 truncate text-right text-xs text-slate-500">
                                            Smartphone & Tablet
                                        </div>
                                    </a>
                                    <a class="mt-2 flex items-center" href="">
                                        <div class="image-fit h-8 w-8">
                                            <img class="rounded-full" src="dist/images/fakers/preview-13.jpg" alt="Midone Tailwind HTML Admin Template">
                                        </div>
                                        <div class="ml-3">Samsung Q90 QLED TV</div>
                                        <div class="ml-auto w-48 truncate text-right text-xs text-slate-500">
                                            Electronic
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- END: Search  -->
                        <!-- BEGIN: Notifications -->
                        <div data-tw-merge="" data-tw-placement="bottom-end" class="dropdown relative intro-x mr-auto sm:mr-6">
                            <div data-tw-toggle="dropdown" aria-expanded="false" class="cursor-pointer relative block text-slate-600 outline-none before:absolute before:right-0 before:top-[-2px] before:h-[8px] before:w-[8px] before:rounded-full before:bg-danger before:content-['']"><i data-tw-merge="" data-lucide="bell" class="stroke-1.5 w-5 h-5 dark:text-slate-500"></i></div>
                            <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150" data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1" data-enter-to="!mt-1 visible opacity-100 translate-y-0" data-leave="transition-all ease-linear duration-150" data-leave-from="!mt-1 visible opacity-100 translate-y-0" data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1" class="dropdown-menu absolute z-[9999] hidden">
                                <div data-tw-merge="" class="dropdown-content rounded-md border-transparent bg-white shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 mt-2 w-[280px] p-5 sm:w-[350px]">
                                    <div class="mb-5 font-medium">Notifications</div>
                                    <div class="cursor-pointer relative flex items-center">
                                        <div class="image-fit relative mr-1 h-12 w-12 flex-none">
                                            <img class="rounded-full" src="dist/images/fakers/profile-10.jpg" alt="Midone Tailwind HTML Admin Template">
                                            <div class="absolute bottom-0 right-0 h-3 w-3 rounded-full border-2 border-white bg-success dark:border-darkmode-600">
                                            </div>
                                        </div>
                                        <div class="ml-2 overflow-hidden">
                                            <div class="flex items-center">
                                                <a class="mr-5 truncate font-medium" href="">
                                                    Russell Crowe
                                                </a>
                                                <div class="ml-auto whitespace-nowrap text-xs text-slate-400">
                                                    05:09 AM
                                                </div>
                                            </div>
                                            <div class="mt-0.5 w-full truncate text-slate-500">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cursor-pointer relative flex items-center mt-5">
                                        <div class="image-fit relative mr-1 h-12 w-12 flex-none">
                                            <img class="rounded-full" src="dist/images/fakers/profile-15.jpg" alt="Midone Tailwind HTML Admin Template">
                                            <div class="absolute bottom-0 right-0 h-3 w-3 rounded-full border-2 border-white bg-success dark:border-darkmode-600">
                                            </div>
                                        </div>
                                        <div class="ml-2 overflow-hidden">
                                            <div class="flex items-center">
                                                <a class="mr-5 truncate font-medium" href="">
                                                    Kevin Spacey
                                                </a>
                                                <div class="ml-auto whitespace-nowrap text-xs text-slate-400">
                                                    01:10 PM
                                                </div>
                                            </div>
                                            <div class="mt-0.5 w-full truncate text-slate-500">
                                                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cursor-pointer relative flex items-center mt-5">
                                        <div class="image-fit relative mr-1 h-12 w-12 flex-none">
                                            <img class="rounded-full" src="dist/images/fakers/profile-1.jpg" alt="Midone Tailwind HTML Admin Template">
                                            <div class="absolute bottom-0 right-0 h-3 w-3 rounded-full border-2 border-white bg-success dark:border-darkmode-600">
                                            </div>
                                        </div>
                                        <div class="ml-2 overflow-hidden">
                                            <div class="flex items-center">
                                                <a class="mr-5 truncate font-medium" href="">
                                                    Arnold Schwarzenegger
                                                </a>
                                                <div class="ml-auto whitespace-nowrap text-xs text-slate-400">
                                                    05:09 AM
                                                </div>
                                            </div>
                                            <div class="mt-0.5 w-full truncate text-slate-500">
                                                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cursor-pointer relative flex items-center mt-5">
                                        <div class="image-fit relative mr-1 h-12 w-12 flex-none">
                                            <img class="rounded-full" src="dist/images/fakers/profile-4.jpg" alt="Midone Tailwind HTML Admin Template">
                                            <div class="absolute bottom-0 right-0 h-3 w-3 rounded-full border-2 border-white bg-success dark:border-darkmode-600">
                                            </div>
                                        </div>
                                        <div class="ml-2 overflow-hidden">
                                            <div class="flex items-center">
                                                <a class="mr-5 truncate font-medium" href="">
                                                    Denzel Washington
                                                </a>
                                                <div class="ml-auto whitespace-nowrap text-xs text-slate-400">
                                                    03:20 PM
                                                </div>
                                            </div>
                                            <div class="mt-0.5 w-full truncate text-slate-500">
                                                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cursor-pointer relative flex items-center mt-5">
                                        <div class="image-fit relative mr-1 h-12 w-12 flex-none">
                                            <img class="rounded-full" src="dist/images/fakers/profile-8.jpg" alt="Midone Tailwind HTML Admin Template">
                                            <div class="absolute bottom-0 right-0 h-3 w-3 rounded-full border-2 border-white bg-success dark:border-darkmode-600">
                                            </div>
                                        </div>
                                        <div class="ml-2 overflow-hidden">
                                            <div class="flex items-center">
                                                <a class="mr-5 truncate font-medium" href="">
                                                    Brad Pitt
                                                </a>
                                                <div class="ml-auto whitespace-nowrap text-xs text-slate-400">
                                                    03:20 PM
                                                </div>
                                            </div>
                                            <div class="mt-0.5 w-full truncate text-slate-500">
                                                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Notifications  -->
                        <!-- BEGIN: Account Menu -->
                        <div data-tw-merge="" data-tw-placement="bottom-end" class="dropdown relative"><button data-tw-toggle="dropdown" aria-expanded="false" class="cursor-pointer image-fit zoom-in intro-x block h-8 w-8 overflow-hidden rounded-full shadow-lg"><img src="dist/images/fakers/profile-8.jpg" alt="Midone Tailwind HTML Admin Template">
                            </button>
                            <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150" data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1" data-enter-to="!mt-1 visible opacity-100 translate-y-0" data-leave="transition-all ease-linear duration-150" data-leave-from="!mt-1 visible opacity-100 translate-y-0" data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1" class="dropdown-menu absolute z-[9999] hidden">
                                <div data-tw-merge="" class="dropdown-content rounded-md border-transparent p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 mt-px w-56 bg-theme-1 text-white">
                                    <div class="p-2 font-medium font-normal">
                                        <div class="font-medium">Russell Crowe</div>
                                        <div class="mt-0.5 text-xs text-white/70 dark:text-slate-500">
                                            Backend Engineer
                                        </div>
                                    </div>
                                    <div class="h-px my-2 -mx-2 bg-slate-200/60 dark:bg-darkmode-400 bg-white/[0.08]">
                                    </div>
                                    <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item hover:bg-white/5"><i data-tw-merge="" data-lucide="user" class="stroke-1.5 mr-2 h-4 w-4"></i>
                                        Profile</a>
                                    <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item hover:bg-white/5"><i data-tw-merge="" data-lucide="edit" class="stroke-1.5 mr-2 h-4 w-4"></i>
                                        Add Account</a>
                                    <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item hover:bg-white/5"><i data-tw-merge="" data-lucide="lock" class="stroke-1.5 mr-2 h-4 w-4"></i>
                                        Reset Password</a>
                                    <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item hover:bg-white/5"><i data-tw-merge="" data-lucide="help-circle" class="stroke-1.5 mr-2 h-4 w-4"></i>
                                        Help</a>
                                    <div class="h-px my-2 -mx-2 bg-slate-200/60 dark:bg-darkmode-400 bg-white/[0.08]">
                                    </div>
                                    <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item hover:bg-white/5"><i data-tw-merge="" data-lucide="toggle-right" class="stroke-1.5 mr-2 h-4 w-4"></i>
                                        Logout</a>
                                </div>
                            </div>
                        </div>
                        <!-- END: Account Menu -->
                    </div>
                    <!-- END: Top Bar -->
                    <div class="grid grid-cols-12 gap-6">
                        <div class="col-span-12 2xl:col-span-9">
                            <div class="grid grid-cols-12 gap-6">
                                <!-- BEGIN: General Report -->
                                <div class="col-span-12 mt-8">
                                    <div class="intro-y flex h-10 items-center">
                                        <h2 class="mr-5 truncate text-lg font-medium">General Report</h2>
                                        <a class="ml-auto flex items-center text-primary" href="">
                                            <i data-tw-merge="" data-lucide="refresh-ccw" class="stroke-1.5 mr-3 h-4 w-4"></i>
                                            Reload Data
                                        </a>
                                    </div>
                                    <div class="mt-5 grid grid-cols-12 gap-6">
                                        <div class="intro-y col-span-12 sm:col-span-6 xl:col-span-3">
                                            <div class="relative zoom-in before:box before:absolute before:inset-x-3 before:mt-3 before:h-full before:bg-slate-50 before:content-['']">
                                                <div class="box p-5">
                                                    <div class="flex">
                                                        <i data-tw-merge="" data-lucide="shopping-cart" class="stroke-1.5 h-[28px] w-[28px] text-primary"></i>
                                                        <div class="ml-auto">
                                                            <div data-placement="top" title="33% Higher than last month" class="tooltip cursor-pointer flex items-center rounded-full bg-success py-[3px] pl-2 pr-1 text-xs font-medium text-white">33%
                                                                <i data-tw-merge="" data-lucide="chevron-up" class="stroke-1.5 ml-0.5 h-4 w-4"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mt-6 text-3xl font-medium leading-8">4.710</div>
                                                    <div class="mt-1 text-base text-slate-500">Item Sales</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="intro-y col-span-12 sm:col-span-6 xl:col-span-3">
                                            <div class="relative zoom-in before:box before:absolute before:inset-x-3 before:mt-3 before:h-full before:bg-slate-50 before:content-['']">
                                                <div class="box p-5">
                                                    <div class="flex">
                                                        <i data-tw-merge="" data-lucide="credit-card" class="stroke-1.5 h-[28px] w-[28px] text-pending"></i>
                                                        <div class="ml-auto">
                                                            <div data-placement="top" title="2% Lower than last month" class="tooltip cursor-pointer flex items-center rounded-full bg-danger py-[3px] pl-2 pr-1 text-xs font-medium text-white">2%
                                                                <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 ml-0.5 h-4 w-4"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mt-6 text-3xl font-medium leading-8">3.721</div>
                                                    <div class="mt-1 text-base text-slate-500">New Orders</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="intro-y col-span-12 sm:col-span-6 xl:col-span-3">
                                            <div class="relative zoom-in before:box before:absolute before:inset-x-3 before:mt-3 before:h-full before:bg-slate-50 before:content-['']">
                                                <div class="box p-5">
                                                    <div class="flex">
                                                        <i data-tw-merge="" data-lucide="monitor" class="stroke-1.5 h-[28px] w-[28px] text-warning"></i>
                                                        <div class="ml-auto">
                                                            <div data-placement="top" title="12% Higher than last month" class="tooltip cursor-pointer flex items-center rounded-full bg-success py-[3px] pl-2 pr-1 text-xs font-medium text-white">12%
                                                                <i data-tw-merge="" data-lucide="chevron-up" class="stroke-1.5 ml-0.5 h-4 w-4"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mt-6 text-3xl font-medium leading-8">2.149</div>
                                                    <div class="mt-1 text-base text-slate-500">
                                                        Total Products
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="intro-y col-span-12 sm:col-span-6 xl:col-span-3">
                                            <div class="relative zoom-in before:box before:absolute before:inset-x-3 before:mt-3 before:h-full before:bg-slate-50 before:content-['']">
                                                <div class="box p-5">
                                                    <div class="flex">
                                                        <i data-tw-merge="" data-lucide="user" class="stroke-1.5 h-[28px] w-[28px] text-success"></i>
                                                        <div class="ml-auto">
                                                            <div data-placement="top" title="22% Higher than last month" class="tooltip cursor-pointer flex items-center rounded-full bg-success py-[3px] pl-2 pr-1 text-xs font-medium text-white">22%
                                                                <i data-tw-merge="" data-lucide="chevron-up" class="stroke-1.5 ml-0.5 h-4 w-4"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mt-6 text-3xl font-medium leading-8">152.040</div>
                                                    <div class="mt-1 text-base text-slate-500">
                                                        Unique Visitor
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END: General Report -->
                                <!-- BEGIN: Sales Report -->
                                <div class="col-span-12 mt-8 lg:col-span-6">
                                    <div class="intro-y block h-10 items-center sm:flex">
                                        <h2 class="mr-5 truncate text-lg font-medium">Sales Report</h2>
                                        <div class="relative mt-3 text-slate-500 sm:ml-auto sm:mt-0">
                                            <i data-tw-merge="" data-lucide="calendar" class="stroke-1.5 absolute inset-y-0 left-0 z-10 my-auto ml-3 h-4 w-4"></i>
                                            <input data-tw-merge="" type="text" class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 datepicker !box pl-10 sm:w-56">
                                        </div>
                                    </div>
                                    <div class="intro-y box mt-12 p-5 sm:mt-5">
                                        <div class="flex flex-col md:flex-row md:items-center">
                                            <div class="flex">
                                                <div>
                                                    <div class="text-lg font-medium text-primary dark:text-slate-300 xl:text-xl">
                                                        $15,000
                                                    </div>
                                                    <div class="mt-0.5 text-slate-500">This Month</div>
                                                </div>
                                                <div class="mx-4 h-12 w-px border border-r border-dashed border-slate-200 dark:border-darkmode-300 xl:mx-5">
                                                </div>
                                                <div>
                                                    <div class="text-lg font-medium text-slate-500 xl:text-xl">
                                                        $10,000
                                                    </div>
                                                    <div class="mt-0.5 text-slate-500">Last Month</div>
                                                </div>
                                            </div>
                                            <div data-tw-merge="" data-tw-placement="bottom-end" class="dropdown relative mt-5 md:ml-auto md:mt-0"><button data-tw-merge="" data-tw-toggle="dropdown" aria-expanded="false" class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-secondary text-slate-500 dark:border-darkmode-100/40 dark:text-slate-300 [&:hover:not(:disabled)]:bg-secondary/20 [&:hover:not(:disabled)]:dark:bg-darkmode-100/10 font-normal">Filter by Category
                                                    <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 ml-2 h-4 w-4"></i></button>
                                                <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150" data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1" data-enter-to="!mt-1 visible opacity-100 translate-y-0" data-leave="transition-all ease-linear duration-150" data-leave-from="!mt-1 visible opacity-100 translate-y-0" data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1" class="dropdown-menu absolute z-[9999] hidden">
                                                    <div data-tw-merge="" class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 h-32 w-40 overflow-y-auto">
                                                        <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item">PC & Laptop</a>
                                                        <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item">Smartphone</a>
                                                        <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item">Electronic</a>
                                                        <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item">Photography</a>
                                                        <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item">Sport</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="relative before:content-[''] before:block before:absolute before:w-16 before:left-0 before:top-0 before:bottom-0 before:ml-10 before:mb-7 before:bg-gradient-to-r before:from-white before:via-white/80 before:to-transparent before:dark:from-darkmode-600 after:content-[''] after:block after:absolute after:w-16 after:right-0 after:top-0 after:bottom-0 after:mb-7 after:bg-gradient-to-l after:from-white after:via-white/80 after:to-transparent after:dark:from-darkmode-600">
                                            <div class="w-auto h-[275px]">
                                                <canvas id="report-line-chart" class="chart -mb-6 mt-6"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END: Sales Report -->
                                <!-- BEGIN: Weekly Top Seller -->
                                <div class="col-span-12 mt-8 sm:col-span-6 lg:col-span-3">
                                    <div class="intro-y flex h-10 items-center">
                                        <h2 class="mr-5 truncate text-lg font-medium">Weekly Top Seller</h2>
                                        <a class="ml-auto truncate text-primary" href=""> Show More </a>
                                    </div>
                                    <div class="intro-y box mt-5 p-5">
                                        <div class="mt-3">
                                            <div class="w-auto h-[213px]">
                                                <canvas id="report-pie-chart" class="chart"></canvas>
                                            </div>
                                        </div>
                                        <div class="mx-auto mt-8 w-52 sm:w-auto">
                                            <div class="flex items-center">
                                                <div class="mr-3 h-2 w-2 rounded-full bg-primary"></div>
                                                <span class="truncate">17 - 30 Years old</span>
                                                <span class="ml-auto font-medium">62%</span>
                                            </div>
                                            <div class="mt-4 flex items-center">
                                                <div class="mr-3 h-2 w-2 rounded-full bg-pending"></div>
                                                <span class="truncate">31 - 50 Years old</span>
                                                <span class="ml-auto font-medium">33%</span>
                                            </div>
                                            <div class="mt-4 flex items-center">
                                                <div class="mr-3 h-2 w-2 rounded-full bg-warning"></div>
                                                <span class="truncate">&gt;= 50 Years old</span>
                                                <span class="ml-auto font-medium">10%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END: Weekly Top Seller -->
                                <!-- BEGIN: Sales Report -->
                                <div class="col-span-12 mt-8 sm:col-span-6 lg:col-span-3">
                                    <div class="intro-y flex h-10 items-center">
                                        <h2 class="mr-5 truncate text-lg font-medium">Sales Report</h2>
                                        <a class="ml-auto truncate text-primary" href=""> Show More </a>
                                    </div>
                                    <div class="intro-y box mt-5 p-5">
                                        <div class="mt-3">
                                            <div class="w-auto h-[213px]">
                                                <canvas id="report-donut-chart" class="chart"></canvas>
                                            </div>
                                        </div>
                                        <div class="mx-auto mt-8 w-52 sm:w-auto">
                                            <div class="flex items-center">
                                                <div class="mr-3 h-2 w-2 rounded-full bg-primary"></div>
                                                <span class="truncate">17 - 30 Years old</span>
                                                <span class="ml-auto font-medium">62%</span>
                                            </div>
                                            <div class="mt-4 flex items-center">
                                                <div class="mr-3 h-2 w-2 rounded-full bg-pending"></div>
                                                <span class="truncate">31 - 50 Years old</span>
                                                <span class="ml-auto font-medium">33%</span>
                                            </div>
                                            <div class="mt-4 flex items-center">
                                                <div class="mr-3 h-2 w-2 rounded-full bg-warning"></div>
                                                <span class="truncate">&gt;= 50 Years old</span>
                                                <span class="ml-auto font-medium">10%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END: Sales Report -->
                                <!-- BEGIN: Official Store -->
                                <div class="col-span-12 mt-6 xl:col-span-8">
                                    <div class="intro-y block h-10 items-center sm:flex">
                                        <h2 class="mr-5 truncate text-lg font-medium">Official Store</h2>
                                        <div class="relative mt-3 text-slate-500 sm:ml-auto sm:mt-0">
                                            <i data-tw-merge="" data-lucide="map-pin" class="stroke-1.5 absolute inset-y-0 left-0 z-10 my-auto ml-3 h-4 w-4"></i>
                                            <input data-tw-merge="" type="text" placeholder="Filter by city" class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 !box pl-10 sm:w-56">
                                        </div>
                                    </div>
                                    <div class="intro-y box mt-12 p-5 sm:mt-5">
                                        <div>
                                            250 Official stores in 21 countries, click the marker to see
                                            location details.
                                        </div>
                                        <div data-lat="-6.2425342" data-long="106.8626478" data-sources="" class="leaflet z-0 [&_.leaflet-tile-pane]:contrast-105 [&_.leaflet-tile-pane]:grayscale [&_.leaflet-tile-pane]:dark:contrast-[.8] [&_.leaflet-tile-pane]:dark:invert mt-5 h-[310px] rounded-md bg-slate-200">
                                        </div>
                                    </div>
                                </div>
                                <!-- END: Official Store -->
                                <!-- BEGIN: Weekly Best Sellers -->
                                <div class="col-span-12 mt-6 xl:col-span-4">
                                    <div class="intro-y flex h-10 items-center">
                                        <h2 class="mr-5 truncate text-lg font-medium">
                                            Weekly Best Sellers
                                        </h2>
                                    </div>
                                    <div class="mt-5">
                                        <div class="intro-y">
                                            <div class="box zoom-in mb-3 flex items-center px-4 py-4">
                                                <div class="image-fit h-10 w-10 flex-none overflow-hidden rounded-md">
                                                    <img src="dist/images/fakers/profile-1.jpg" alt="Midone - Tailwind Admin Dashboard Template">
                                                </div>
                                                <div class="ml-4 mr-auto">
                                                    <div class="font-medium">Denzel Washington</div>
                                                    <div class="mt-0.5 text-xs text-slate-500">
                                                        6 July 2020
                                                    </div>
                                                </div>
                                                <div class="cursor-pointer rounded-full bg-success px-2 py-1 text-xs font-medium text-white">
                                                    137 Sales
                                                </div>
                                            </div>
                                        </div>
                                        <div class="intro-y">
                                            <div class="box zoom-in mb-3 flex items-center px-4 py-4">
                                                <div class="image-fit h-10 w-10 flex-none overflow-hidden rounded-md">
                                                    <img src="dist/images/fakers/profile-8.jpg" alt="Midone - Tailwind Admin Dashboard Template">
                                                </div>
                                                <div class="ml-4 mr-auto">
                                                    <div class="font-medium">Russell Crowe</div>
                                                    <div class="mt-0.5 text-xs text-slate-500">
                                                        30 August 2021
                                                    </div>
                                                </div>
                                                <div class="cursor-pointer rounded-full bg-success px-2 py-1 text-xs font-medium text-white">
                                                    137 Sales
                                                </div>
                                            </div>
                                        </div>
                                        <div class="intro-y">
                                            <div class="box zoom-in mb-3 flex items-center px-4 py-4">
                                                <div class="image-fit h-10 w-10 flex-none overflow-hidden rounded-md">
                                                    <img src="dist/images/fakers/profile-8.jpg" alt="Midone - Tailwind Admin Dashboard Template">
                                                </div>
                                                <div class="ml-4 mr-auto">
                                                    <div class="font-medium">Christian Bale</div>
                                                    <div class="mt-0.5 text-xs text-slate-500">
                                                        13 December 2022
                                                    </div>
                                                </div>
                                                <div class="cursor-pointer rounded-full bg-success px-2 py-1 text-xs font-medium text-white">
                                                    137 Sales
                                                </div>
                                            </div>
                                        </div>
                                        <div class="intro-y">
                                            <div class="box zoom-in mb-3 flex items-center px-4 py-4">
                                                <div class="image-fit h-10 w-10 flex-none overflow-hidden rounded-md">
                                                    <img src="dist/images/fakers/profile-3.jpg" alt="Midone - Tailwind Admin Dashboard Template">
                                                </div>
                                                <div class="ml-4 mr-auto">
                                                    <div class="font-medium">John Travolta</div>
                                                    <div class="mt-0.5 text-xs text-slate-500">
                                                        8 December 2022
                                                    </div>
                                                </div>
                                                <div class="cursor-pointer rounded-full bg-success px-2 py-1 text-xs font-medium text-white">
                                                    137 Sales
                                                </div>
                                            </div>
                                        </div>
                                        <a class="intro-y block w-full rounded-md border border-dotted border-slate-400 py-4 text-center text-slate-500 dark:border-darkmode-300" href="">
                                            View More
                                        </a>
                                    </div>
                                </div>
                                <!-- END: Weekly Best Sellers -->
                                <!-- BEGIN: General Report -->
                                <div class="col-span-12 mt-8 grid grid-cols-12 gap-6">
                                    <div class="intro-y col-span-12 sm:col-span-6 2xl:col-span-3">
                                        <div class="box zoom-in p-5">
                                            <div class="flex items-center">
                                                <div class="w-2/4 flex-none">
                                                    <div class="truncate text-lg font-medium">Target Sales</div>
                                                    <div class="mt-1 text-slate-500">300 Sales</div>
                                                </div>
                                                <div class="relative ml-auto flex-none">
                                                    <div class="w-[90px] h-[90px]">
                                                        <canvas class="chart report-donut-chart-1"></canvas>
                                                    </div>
                                                    <div class="absolute left-0 top-0 flex h-full w-full items-center justify-center font-medium">
                                                        20%
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="intro-y col-span-12 sm:col-span-6 2xl:col-span-3">
                                        <div class="box zoom-in p-5">
                                            <div class="flex">
                                                <div class="mr-3 truncate text-lg font-medium">
                                                    Social Media
                                                </div>
                                                <div class="ml-auto flex cursor-pointer items-center truncate rounded-full bg-slate-100 px-2 py-1 text-xs text-slate-500 dark:bg-darkmode-400">
                                                    320 Followers
                                                </div>
                                            </div>
                                            <div class="mt-1">
                                                <div class="w-auto h-[58px]">
                                                    <canvas class="chart simple-line-chart-1 -ml-1"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="intro-y col-span-12 sm:col-span-6 2xl:col-span-3">
                                        <div class="box zoom-in p-5">
                                            <div class="flex items-center">
                                                <div class="w-2/4 flex-none">
                                                    <div class="truncate text-lg font-medium">New Products</div>
                                                    <div class="mt-1 text-slate-500">1450 Products</div>
                                                </div>
                                                <div class="relative ml-auto flex-none">
                                                    <div class="w-[90px] h-[90px]">
                                                        <canvas class="chart report-donut-chart-1"></canvas>
                                                    </div>
                                                    <div class="absolute left-0 top-0 flex h-full w-full items-center justify-center font-medium">
                                                        45%
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="intro-y col-span-12 sm:col-span-6 2xl:col-span-3">
                                        <div class="box zoom-in p-5">
                                            <div class="flex">
                                                <div class="mr-3 truncate text-lg font-medium">Posted Ads</div>
                                                <div class="ml-auto flex cursor-pointer items-center truncate rounded-full bg-slate-100 px-2 py-1 text-xs text-slate-500 dark:bg-darkmode-400">
                                                    180 Campaign
                                                </div>
                                            </div>
                                            <div class="mt-1">
                                                <div class="w-auto h-[58px]">
                                                    <canvas class="chart simple-line-chart-1 -ml-1"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END: General Report -->
                                <!-- BEGIN: Weekly Top Products -->
                                <div class="col-span-12 mt-6">
                                    <div class="intro-y block h-10 items-center sm:flex">
                                        <h2 class="mr-5 truncate text-lg font-medium">
                                            Weekly Top Products
                                        </h2>
                                        <div class="mt-3 flex items-center sm:ml-auto sm:mt-0">
                                            <button data-tw-merge="" class="transition duration-200 border shadow-sm items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed !box flex text-slate-600 dark:text-slate-300"><i data-tw-merge="" data-lucide="file-text" class="stroke-1.5 mr-2 hidden h-4 w-4 sm:block"></i>
                                                Export to Excel</button>
                                            <button data-tw-merge="" class="transition duration-200 border shadow-sm items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed !box ml-3 flex text-slate-600 dark:text-slate-300"><i data-tw-merge="" data-lucide="file-text" class="stroke-1.5 mr-2 hidden h-4 w-4 sm:block"></i>
                                                Export to PDF</button>
                                        </div>
                                    </div>
                                    <div class="intro-y mt-8 overflow-auto sm:mt-0 lg:overflow-visible">
                                        <table data-tw-merge="" class="w-full text-left border-separate border-spacing-y-[10px] sm:mt-2">
                                            <thead data-tw-merge="" class="">
                                                <tr data-tw-merge="" class="">
                                                    <th data-tw-merge="" class="font-medium px-5 py-3 dark:border-darkmode-300 whitespace-nowrap border-b-0">
                                                        IMAGES
                                                    </th>
                                                    <th data-tw-merge="" class="font-medium px-5 py-3 dark:border-darkmode-300 whitespace-nowrap border-b-0">
                                                        PRODUCT NAME
                                                    </th>
                                                    <th data-tw-merge="" class="font-medium px-5 py-3 dark:border-darkmode-300 whitespace-nowrap border-b-0 text-center">
                                                        STOCK
                                                    </th>
                                                    <th data-tw-merge="" class="font-medium px-5 py-3 dark:border-darkmode-300 whitespace-nowrap border-b-0 text-center">
                                                        STATUS
                                                    </th>
                                                    <th data-tw-merge="" class="font-medium px-5 py-3 dark:border-darkmode-300 whitespace-nowrap border-b-0 text-center">
                                                        ACTIONS
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr data-tw-merge="" class="intro-x">
                                                    <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box w-40 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                                        <div class="flex">
                                                            <div class="image-fit zoom-in h-10 w-10">
                                                                <img data-placement="top" title="Uploaded at 6 July 2020" src="dist/images/fakers/preview-1.jpg" alt="Midone - Tailwind Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                                            </div>
                                                            <div class="image-fit zoom-in -ml-5 h-10 w-10">
                                                                <img data-placement="top" title="Uploaded at 12 July 2022" src="dist/images/fakers/profile-3.jpg" alt="Midone - Tailwind Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                                            </div>
                                                            <div class="image-fit zoom-in -ml-5 h-10 w-10">
                                                                <img data-placement="top" title="Uploaded at 10 December 2021" src="dist/images/fakers/profile-7.jpg" alt="Midone - Tailwind Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                                        <a class="whitespace-nowrap font-medium" href="">
                                                            Dell XPS 13
                                                        </a>
                                                        <div class="mt-0.5 whitespace-nowrap text-xs text-slate-500">
                                                            PC & Laptop
                                                        </div>
                                                    </td>
                                                    <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                                        71
                                                    </td>
                                                    <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box w-40 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                                        <div class="flex items-center justify-center text-danger">
                                                            <i data-tw-merge="" data-lucide="check-square" class="stroke-1.5 mr-2 h-4 w-4"></i>
                                                            Inactive
                                                        </div>
                                                    </td>
                                                    <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box w-56 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600 before:absolute before:inset-y-0 before:left-0 before:my-auto before:block before:h-8 before:w-px before:bg-slate-200 before:dark:bg-darkmode-400">
                                                        <div class="flex items-center justify-center">
                                                            <a class="mr-3 flex items-center" href="">
                                                                <i data-tw-merge="" data-lucide="check-square" class="stroke-1.5 mr-1 h-4 w-4"></i>
                                                                Edit
                                                            </a>
                                                            <a class="flex items-center text-danger" href="">
                                                                <i data-tw-merge="" data-lucide="trash" class="stroke-1.5 mr-1 h-4 w-4"></i>
                                                                Delete
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr data-tw-merge="" class="intro-x">
                                                    <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box w-40 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                                        <div class="flex">
                                                            <div class="image-fit zoom-in h-10 w-10">
                                                                <img data-placement="top" title="Uploaded at 30 August 2021" src="dist/images/fakers/preview-6.jpg" alt="Midone - Tailwind Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                                            </div>
                                                            <div class="image-fit zoom-in -ml-5 h-10 w-10">
                                                                <img data-placement="top" title="Uploaded at 28 April 2022" src="dist/images/fakers/profile-5.jpg" alt="Midone - Tailwind Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                                            </div>
                                                            <div class="image-fit zoom-in -ml-5 h-10 w-10">
                                                                <img data-placement="top" title="Uploaded at 5 December 2020" src="dist/images/fakers/profile-11.jpg" alt="Midone - Tailwind Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                                        <a class="whitespace-nowrap font-medium" href="">
                                                            Samsung Q90 QLED TV
                                                        </a>
                                                        <div class="mt-0.5 whitespace-nowrap text-xs text-slate-500">
                                                            Electronic
                                                        </div>
                                                    </td>
                                                    <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                                        68
                                                    </td>
                                                    <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box w-40 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                                        <div class="flex items-center justify-center text-success">
                                                            <i data-tw-merge="" data-lucide="check-square" class="stroke-1.5 mr-2 h-4 w-4"></i>
                                                            Active
                                                        </div>
                                                    </td>
                                                    <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box w-56 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600 before:absolute before:inset-y-0 before:left-0 before:my-auto before:block before:h-8 before:w-px before:bg-slate-200 before:dark:bg-darkmode-400">
                                                        <div class="flex items-center justify-center">
                                                            <a class="mr-3 flex items-center" href="">
                                                                <i data-tw-merge="" data-lucide="check-square" class="stroke-1.5 mr-1 h-4 w-4"></i>
                                                                Edit
                                                            </a>
                                                            <a class="flex items-center text-danger" href="">
                                                                <i data-tw-merge="" data-lucide="trash" class="stroke-1.5 mr-1 h-4 w-4"></i>
                                                                Delete
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr data-tw-merge="" class="intro-x">
                                                    <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box w-40 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                                        <div class="flex">
                                                            <div class="image-fit zoom-in h-10 w-10">
                                                                <img data-placement="top" title="Uploaded at 13 December 2022" src="dist/images/fakers/preview-1.jpg" alt="Midone - Tailwind Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                                            </div>
                                                            <div class="image-fit zoom-in -ml-5 h-10 w-10">
                                                                <img data-placement="top" title="Uploaded at 28 July 2020" src="dist/images/fakers/profile-12.jpg" alt="Midone - Tailwind Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                                            </div>
                                                            <div class="image-fit zoom-in -ml-5 h-10 w-10">
                                                                <img data-placement="top" title="Uploaded at 7 May 2021" src="dist/images/fakers/profile-5.jpg" alt="Midone - Tailwind Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                                        <a class="whitespace-nowrap font-medium" href="">
                                                            Samsung Galaxy S20 Ultra
                                                        </a>
                                                        <div class="mt-0.5 whitespace-nowrap text-xs text-slate-500">
                                                            Smartphone & Tablet
                                                        </div>
                                                    </td>
                                                    <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                                        50
                                                    </td>
                                                    <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box w-40 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                                        <div class="flex items-center justify-center text-success">
                                                            <i data-tw-merge="" data-lucide="check-square" class="stroke-1.5 mr-2 h-4 w-4"></i>
                                                            Active
                                                        </div>
                                                    </td>
                                                    <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box w-56 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600 before:absolute before:inset-y-0 before:left-0 before:my-auto before:block before:h-8 before:w-px before:bg-slate-200 before:dark:bg-darkmode-400">
                                                        <div class="flex items-center justify-center">
                                                            <a class="mr-3 flex items-center" href="">
                                                                <i data-tw-merge="" data-lucide="check-square" class="stroke-1.5 mr-1 h-4 w-4"></i>
                                                                Edit
                                                            </a>
                                                            <a class="flex items-center text-danger" href="">
                                                                <i data-tw-merge="" data-lucide="trash" class="stroke-1.5 mr-1 h-4 w-4"></i>
                                                                Delete
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr data-tw-merge="" class="intro-x">
                                                    <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box w-40 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                                        <div class="flex">
                                                            <div class="image-fit zoom-in h-10 w-10">
                                                                <img data-placement="top" title="Uploaded at 8 December 2022" src="dist/images/fakers/preview-10.jpg" alt="Midone - Tailwind Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                                            </div>
                                                            <div class="image-fit zoom-in -ml-5 h-10 w-10">
                                                                <img data-placement="top" title="Uploaded at 3 June 2022" src="dist/images/fakers/profile-12.jpg" alt="Midone - Tailwind Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                                            </div>
                                                            <div class="image-fit zoom-in -ml-5 h-10 w-10">
                                                                <img data-placement="top" title="Uploaded at 13 May 2020" src="dist/images/fakers/profile-2.jpg" alt="Midone - Tailwind Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                                        <a class="whitespace-nowrap font-medium" href="">
                                                            Sony Master Series A9G
                                                        </a>
                                                        <div class="mt-0.5 whitespace-nowrap text-xs text-slate-500">
                                                            Electronic
                                                        </div>
                                                    </td>
                                                    <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                                        55
                                                    </td>
                                                    <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box w-40 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                                        <div class="flex items-center justify-center text-success">
                                                            <i data-tw-merge="" data-lucide="check-square" class="stroke-1.5 mr-2 h-4 w-4"></i>
                                                            Active
                                                        </div>
                                                    </td>
                                                    <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box w-56 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600 before:absolute before:inset-y-0 before:left-0 before:my-auto before:block before:h-8 before:w-px before:bg-slate-200 before:dark:bg-darkmode-400">
                                                        <div class="flex items-center justify-center">
                                                            <a class="mr-3 flex items-center" href="">
                                                                <i data-tw-merge="" data-lucide="check-square" class="stroke-1.5 mr-1 h-4 w-4"></i>
                                                                Edit
                                                            </a>
                                                            <a class="flex items-center text-danger" href="">
                                                                <i data-tw-merge="" data-lucide="trash" class="stroke-1.5 mr-1 h-4 w-4"></i>
                                                                Delete
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="intro-y mt-3 flex flex-wrap items-center sm:flex-row sm:flex-nowrap">
                                        <nav class="w-full sm:mr-auto sm:w-auto">
                                            <ul class="flex w-full mr-0 sm:mr-auto sm:w-auto">
                                                <li class="flex-1 sm:flex-initial">
                                                    <a data-tw-merge="" class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3"><i data-tw-merge="" data-lucide="chevrons-left" class="stroke-1.5 h-4 w-4"></i></a>
                                                </li>
                                                <li class="flex-1 sm:flex-initial">
                                                    <a data-tw-merge="" class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3"><i data-tw-merge="" data-lucide="chevron-left" class="stroke-1.5 h-4 w-4"></i></a>
                                                </li>
                                                <li class="flex-1 sm:flex-initial">
                                                    <a data-tw-merge="" class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3">...</a>
                                                </li>
                                                <li class="flex-1 sm:flex-initial">
                                                    <a data-tw-merge="" class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3">1</a>
                                                </li>
                                                <li class="flex-1 sm:flex-initial">
                                                    <a data-tw-merge="" class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3 !box dark:bg-darkmode-400">2</a>
                                                </li>
                                                <li class="flex-1 sm:flex-initial">
                                                    <a data-tw-merge="" class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3">3</a>
                                                </li>
                                                <li class="flex-1 sm:flex-initial">
                                                    <a data-tw-merge="" class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3">...</a>
                                                </li>
                                                <li class="flex-1 sm:flex-initial">
                                                    <a data-tw-merge="" class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3"><i data-tw-merge="" data-lucide="chevron-right" class="stroke-1.5 h-4 w-4"></i></a>
                                                </li>
                                                <li class="flex-1 sm:flex-initial">
                                                    <a data-tw-merge="" class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3"><i data-tw-merge="" data-lucide="chevrons-right" class="stroke-1.5 h-4 w-4"></i></a>
                                                </li>
                                            </ul>
                                        </nav>
                                        <select data-tw-merge="" class="disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-800/50 [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 transition duration-200 ease-in-out text-sm border-slate-200 shadow-sm rounded-md py-2 px-3 pr-8 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 group-[.form-inline]:flex-1 !box mt-3 w-20 sm:mt-0">
                                            <option>10</option>
                                            <option>25</option>
                                            <option>35</option>
                                            <option>50</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- END: Weekly Top Products -->
                            </div>
                        </div>
                        <div class="col-span-12 2xl:col-span-3">
                            <div class="-mb-10 pb-10 2xl:border-l">
                                <div class="grid grid-cols-12 gap-x-6 gap-y-6 2xl:gap-x-0 2xl:pl-6">
                                    <!-- BEGIN: Transactions -->
                                    <div class="col-span-12 mt-3 md:col-span-6 xl:col-span-4 2xl:col-span-12 2xl:mt-8">
                                        <div class="intro-x flex h-10 items-center">
                                            <h2 class="mr-5 truncate text-lg font-medium">Transactions</h2>
                                        </div>
                                        <div class="mt-5">
                                            <div class="intro-x">
                                                <div class="box zoom-in mb-3 flex items-center px-5 py-3">
                                                    <div class="image-fit h-10 w-10 flex-none overflow-hidden rounded-full">
                                                        <img src="dist/images/fakers/profile-1.jpg" alt="Midone - Tailwind Admin Dashboard Template">
                                                    </div>
                                                    <div class="ml-4 mr-auto">
                                                        <div class="font-medium">Denzel Washington</div>
                                                        <div class="mt-0.5 text-xs text-slate-500">
                                                            6 July 2020
                                                        </div>
                                                    </div>
                                                    <div class="text-danger">
                                                        -$23
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="intro-x">
                                                <div class="box zoom-in mb-3 flex items-center px-5 py-3">
                                                    <div class="image-fit h-10 w-10 flex-none overflow-hidden rounded-full">
                                                        <img src="dist/images/fakers/profile-8.jpg" alt="Midone - Tailwind Admin Dashboard Template">
                                                    </div>
                                                    <div class="ml-4 mr-auto">
                                                        <div class="font-medium">Russell Crowe</div>
                                                        <div class="mt-0.5 text-xs text-slate-500">
                                                            30 August 2021
                                                        </div>
                                                    </div>
                                                    <div class="text-success">
                                                        +$93
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="intro-x">
                                                <div class="box zoom-in mb-3 flex items-center px-5 py-3">
                                                    <div class="image-fit h-10 w-10 flex-none overflow-hidden rounded-full">
                                                        <img src="dist/images/fakers/profile-8.jpg" alt="Midone - Tailwind Admin Dashboard Template">
                                                    </div>
                                                    <div class="ml-4 mr-auto">
                                                        <div class="font-medium">Christian Bale</div>
                                                        <div class="mt-0.5 text-xs text-slate-500">
                                                            13 December 2022
                                                        </div>
                                                    </div>
                                                    <div class="text-success">
                                                        +$70
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="intro-x">
                                                <div class="box zoom-in mb-3 flex items-center px-5 py-3">
                                                    <div class="image-fit h-10 w-10 flex-none overflow-hidden rounded-full">
                                                        <img src="dist/images/fakers/profile-3.jpg" alt="Midone - Tailwind Admin Dashboard Template">
                                                    </div>
                                                    <div class="ml-4 mr-auto">
                                                        <div class="font-medium">John Travolta</div>
                                                        <div class="mt-0.5 text-xs text-slate-500">
                                                            8 December 2022
                                                        </div>
                                                    </div>
                                                    <div class="text-success">
                                                        +$214
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="intro-x">
                                                <div class="box zoom-in mb-3 flex items-center px-5 py-3">
                                                    <div class="image-fit h-10 w-10 flex-none overflow-hidden rounded-full">
                                                        <img src="dist/images/fakers/profile-14.jpg" alt="Midone - Tailwind Admin Dashboard Template">
                                                    </div>
                                                    <div class="ml-4 mr-auto">
                                                        <div class="font-medium">Tom Cruise</div>
                                                        <div class="mt-0.5 text-xs text-slate-500">
                                                            24 April 2021
                                                        </div>
                                                    </div>
                                                    <div class="text-success">
                                                        +$192
                                                    </div>
                                                </div>
                                            </div>
                                            <a class="intro-x block w-full rounded-md border border-dotted border-slate-400 py-3 text-center text-slate-500 dark:border-darkmode-300" href="">
                                                View More
                                            </a>
                                        </div>
                                    </div>
                                    <!-- END: Transactions -->
                                    <!-- BEGIN: Recent Activities -->
                                    <div class="col-span-12 mt-3 md:col-span-6 xl:col-span-4 2xl:col-span-12">
                                        <div class="intro-x flex h-10 items-center">
                                            <h2 class="mr-5 truncate text-lg font-medium">
                                                Recent Activities
                                            </h2>
                                            <a class="ml-auto truncate text-primary" href=""> Show More </a>
                                        </div>
                                        <div class="relative mt-5 before:absolute before:ml-5 before:mt-5 before:block before:h-[85%] before:w-px before:bg-slate-200 before:dark:bg-darkmode-400">
                                            <div class="intro-x relative mb-3 flex items-center">
                                                <div class="before:absolute before:ml-5 before:mt-5 before:block before:h-px before:w-20 before:bg-slate-200 before:dark:bg-darkmode-400">
                                                    <div class="image-fit h-10 w-10 flex-none overflow-hidden rounded-full">
                                                        <img src="dist/images/fakers/profile-8.jpg" alt="Midone - Tailwind Admin Dashboard Template">
                                                    </div>
                                                </div>
                                                <div class="box zoom-in ml-4 flex-1 px-5 py-3">
                                                    <div class="flex items-center">
                                                        <div class="font-medium">
                                                            Al Pacino
                                                        </div>
                                                        <div class="ml-auto text-xs text-slate-500">07:00 PM</div>
                                                    </div>
                                                    <div class="mt-1 text-slate-500">Has joined the team</div>
                                                </div>
                                            </div>
                                            <div class="intro-x relative mb-3 flex items-center">
                                                <div class="before:absolute before:ml-5 before:mt-5 before:block before:h-px before:w-20 before:bg-slate-200 before:dark:bg-darkmode-400">
                                                    <div class="image-fit h-10 w-10 flex-none overflow-hidden rounded-full">
                                                        <img src="dist/images/fakers/profile-15.jpg" alt="Midone - Tailwind Admin Dashboard Template">
                                                    </div>
                                                </div>
                                                <div class="box zoom-in ml-4 flex-1 px-5 py-3">
                                                    <div class="flex items-center">
                                                        <div class="font-medium">
                                                            Keanu Reeves
                                                        </div>
                                                        <div class="ml-auto text-xs text-slate-500">07:00 PM</div>
                                                    </div>
                                                    <div class="text-slate-500">
                                                        <div class="mt-1">Added 3 new photos</div>
                                                        <div class="mt-2 flex">
                                                            <div data-placement="top" title="Dell XPS 13" class="tooltip cursor-pointer image-fit zoom-in mr-1 h-8 w-8"><img class="rounded-md border border-white" src="dist/images/fakers/profile-15.jpg" alt="Midone - Tailwind Admin Dashboard Template"></div>
                                                            <div data-placement="top" title="Samsung Q90 QLED TV" class="tooltip cursor-pointer image-fit zoom-in mr-1 h-8 w-8"><img class="rounded-md border border-white" src="dist/images/fakers/profile-9.jpg" alt="Midone - Tailwind Admin Dashboard Template"></div>
                                                            <div data-placement="top" title="Samsung Galaxy S20 Ultra" class="tooltip cursor-pointer image-fit zoom-in mr-1 h-8 w-8"><img class="rounded-md border border-white" src="dist/images/fakers/profile-3.jpg" alt="Midone - Tailwind Admin Dashboard Template"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="intro-x my-4 text-center text-xs text-slate-500">
                                                12 November
                                            </div>
                                            <div class="intro-x relative mb-3 flex items-center">
                                                <div class="before:absolute before:ml-5 before:mt-5 before:block before:h-px before:w-20 before:bg-slate-200 before:dark:bg-darkmode-400">
                                                    <div class="image-fit h-10 w-10 flex-none overflow-hidden rounded-full">
                                                        <img src="dist/images/fakers/profile-7.jpg" alt="Midone - Tailwind Admin Dashboard Template">
                                                    </div>
                                                </div>
                                                <div class="box zoom-in ml-4 flex-1 px-5 py-3">
                                                    <div class="flex items-center">
                                                        <div class="font-medium">
                                                            Johnny Depp
                                                        </div>
                                                        <div class="ml-auto text-xs text-slate-500">07:00 PM</div>
                                                    </div>
                                                    <div class="mt-1 text-slate-500">
                                                        Has changed
                                                        <a class="text-primary" href="">
                                                            Nike Tanjun
                                                        </a>
                                                        price and description
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="intro-x relative mb-3 flex items-center">
                                                <div class="before:absolute before:ml-5 before:mt-5 before:block before:h-px before:w-20 before:bg-slate-200 before:dark:bg-darkmode-400">
                                                    <div class="image-fit h-10 w-10 flex-none overflow-hidden rounded-full">
                                                        <img src="dist/images/fakers/profile-5.jpg" alt="Midone - Tailwind Admin Dashboard Template">
                                                    </div>
                                                </div>
                                                <div class="box zoom-in ml-4 flex-1 px-5 py-3">
                                                    <div class="flex items-center">
                                                        <div class="font-medium">
                                                            Russell Crowe
                                                        </div>
                                                        <div class="ml-auto text-xs text-slate-500">07:00 PM</div>
                                                    </div>
                                                    <div class="mt-1 text-slate-500">
                                                        Has changed
                                                        <a class="text-primary" href="">
                                                            Sony A7 III
                                                        </a>
                                                        description
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END: Recent Activities -->
                                    <!-- BEGIN: Important Notes -->
                                    <div class="col-span-12 mt-3 md:col-span-6 xl:col-span-12 xl:col-start-1 xl:row-start-1 2xl:col-start-auto 2xl:row-start-auto">
                                        <div class="intro-x flex h-10 items-center">
                                            <h2 class="mr-auto truncate text-lg font-medium">
                                                Important Notes
                                            </h2>
                                            <button data-tw-merge="" data-carousel="important-notes" data-target="prev" class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed tiny-slider-navigator mr-2 border-slate-300 px-2 text-slate-600 dark:text-slate-300"><i data-tw-merge="" data-lucide="chevron-left" class="stroke-1.5 h-4 w-4"></i></button>
                                            <button data-tw-merge="" data-carousel="important-notes" data-target="next" class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed tiny-slider-navigator mr-2 border-slate-300 px-2 text-slate-600 dark:text-slate-300"><i data-tw-merge="" data-lucide="chevron-right" class="stroke-1.5 h-4 w-4"></i></button>
                                        </div>
                                        <div class="intro-x mt-5">
                                            <div class="box zoom-in">
                                                <div data-config="" id="important-notes" class="tiny-slider">
                                                    <div class="p-5">
                                                        <div class="truncate text-base font-medium">
                                                            Lorem Ipsum is simply dummy text
                                                        </div>
                                                        <div class="mt-1 text-slate-400">20 Hours ago</div>
                                                        <div class="mt-1 text-justify text-slate-500">
                                                            Lorem Ipsum is simply dummy text of the printing and
                                                            typesetting industry. Lorem Ipsum has been the industry's
                                                            standard dummy text ever since the 1500s.
                                                        </div>
                                                        <div class="mt-5 flex font-medium">
                                                            <button data-tw-merge="" type="button" class="transition duration-200 border shadow-sm inline-flex items-center justify-center rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-secondary/70 border-secondary/70 text-slate-500 dark:border-darkmode-400 dark:bg-darkmode-400 dark:text-slate-300 [&:hover:not(:disabled)]:bg-slate-100 [&:hover:not(:disabled)]:border-slate-100 [&:hover:not(:disabled)]:dark:border-darkmode-300/80 [&:hover:not(:disabled)]:dark:bg-darkmode-300/80 px-2 py-1">View Notes</button>
                                                            <button data-tw-merge="" type="button" class="transition duration-200 border shadow-sm inline-flex items-center justify-center rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-secondary text-slate-500 dark:border-darkmode-100/40 dark:text-slate-300 [&:hover:not(:disabled)]:bg-secondary/20 [&:hover:not(:disabled)]:dark:bg-darkmode-100/10 ml-auto px-2 py-1">Dismiss</button>
                                                        </div>
                                                    </div>
                                                    <div class="p-5">
                                                        <div class="truncate text-base font-medium">
                                                            Lorem Ipsum is simply dummy text
                                                        </div>
                                                        <div class="mt-1 text-slate-400">20 Hours ago</div>
                                                        <div class="mt-1 text-justify text-slate-500">
                                                            Lorem Ipsum is simply dummy text of the printing and
                                                            typesetting industry. Lorem Ipsum has been the industry's
                                                            standard dummy text ever since the 1500s.
                                                        </div>
                                                        <div class="mt-5 flex font-medium">
                                                            <button data-tw-merge="" type="button" class="transition duration-200 border shadow-sm inline-flex items-center justify-center rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-secondary/70 border-secondary/70 text-slate-500 dark:border-darkmode-400 dark:bg-darkmode-400 dark:text-slate-300 [&:hover:not(:disabled)]:bg-slate-100 [&:hover:not(:disabled)]:border-slate-100 [&:hover:not(:disabled)]:dark:border-darkmode-300/80 [&:hover:not(:disabled)]:dark:bg-darkmode-300/80 px-2 py-1">View Notes</button>
                                                            <button data-tw-merge="" type="button" class="transition duration-200 border shadow-sm inline-flex items-center justify-center rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-secondary text-slate-500 dark:border-darkmode-100/40 dark:text-slate-300 [&:hover:not(:disabled)]:bg-secondary/20 [&:hover:not(:disabled)]:dark:bg-darkmode-100/10 ml-auto px-2 py-1">Dismiss</button>
                                                        </div>
                                                    </div>
                                                    <div class="p-5">
                                                        <div class="truncate text-base font-medium">
                                                            Lorem Ipsum is simply dummy text
                                                        </div>
                                                        <div class="mt-1 text-slate-400">20 Hours ago</div>
                                                        <div class="mt-1 text-justify text-slate-500">
                                                            Lorem Ipsum is simply dummy text of the printing and
                                                            typesetting industry. Lorem Ipsum has been the industry's
                                                            standard dummy text ever since the 1500s.
                                                        </div>
                                                        <div class="mt-5 flex font-medium">
                                                            <button data-tw-merge="" type="button" class="transition duration-200 border shadow-sm inline-flex items-center justify-center rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-secondary/70 border-secondary/70 text-slate-500 dark:border-darkmode-400 dark:bg-darkmode-400 dark:text-slate-300 [&:hover:not(:disabled)]:bg-slate-100 [&:hover:not(:disabled)]:border-slate-100 [&:hover:not(:disabled)]:dark:border-darkmode-300/80 [&:hover:not(:disabled)]:dark:bg-darkmode-300/80 px-2 py-1">View Notes</button>
                                                            <button data-tw-merge="" type="button" class="transition duration-200 border shadow-sm inline-flex items-center justify-center rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-secondary text-slate-500 dark:border-darkmode-100/40 dark:text-slate-300 [&:hover:not(:disabled)]:bg-secondary/20 [&:hover:not(:disabled)]:dark:bg-darkmode-100/10 ml-auto px-2 py-1">Dismiss</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END: Important Notes -->
                                    <!-- BEGIN: Schedules -->
                                    <div class="col-span-12 mt-3 md:col-span-6 xl:col-span-4 xl:col-start-1 xl:row-start-2 2xl:col-span-12 2xl:col-start-auto 2xl:row-start-auto">
                                        <div class="intro-x flex h-10 items-center">
                                            <h2 class="mr-5 truncate text-lg font-medium">Schedules</h2>
                                            <a class="ml-auto flex items-center truncate text-primary" href="">
                                                <i data-tw-merge="" data-lucide="plus" class="stroke-1.5 mr-1 h-4 w-4"></i>
                                                Add New Schedules
                                            </a>
                                        </div>
                                        <div class="mt-5">
                                            <div class="intro-x box">
                                                <div class="p-5">
                                                    <div class="flex">
                                                        <i data-tw-merge="" data-lucide="chevron-left" class="stroke-1.5 w-5 h-5 text-slate-500"></i>
                                                        <div class="mx-auto text-base font-medium">April</div>
                                                        <i data-tw-merge="" data-lucide="chevron-right" class="stroke-1.5 w-5 h-5 text-slate-500"></i>
                                                    </div>
                                                    <div class="mt-5 grid grid-cols-7 gap-4 text-center">
                                                        <div class="font-medium">Su</div>
                                                        <div class="font-medium">Mo</div>
                                                        <div class="font-medium">Tu</div>
                                                        <div class="font-medium">We</div>
                                                        <div class="font-medium">Th</div>
                                                        <div class="font-medium">Fr</div>
                                                        <div class="font-medium">Sa</div>
                                                        <div class="relative rounded py-0.5 text-slate-500">29</div>
                                                        <div class="relative rounded py-0.5 text-slate-500">30</div>
                                                        <div class="relative rounded py-0.5 text-slate-500">31</div>
                                                        <div class="relative rounded py-0.5">1</div>
                                                        <div class="relative rounded py-0.5">2</div>
                                                        <div class="relative rounded py-0.5">3</div>
                                                        <div class="relative rounded py-0.5">4</div>
                                                        <div class="relative rounded py-0.5">5</div>
                                                        <div class="relative rounded bg-success/20 py-0.5 dark:bg-success/30">
                                                            6
                                                        </div>
                                                        <div class="relative rounded py-0.5">7</div>
                                                        <div class="relative rounded bg-primary py-0.5 text-white">
                                                            8
                                                        </div>
                                                        <div class="relative rounded py-0.5">9</div>
                                                        <div class="relative rounded py-0.5">10</div>
                                                        <div class="relative rounded py-0.5">11</div>
                                                        <div class="relative rounded py-0.5">12</div>
                                                        <div class="relative rounded py-0.5">13</div>
                                                        <div class="relative rounded py-0.5">14</div>
                                                        <div class="relative rounded py-0.5">15</div>
                                                        <div class="relative rounded py-0.5">16</div>
                                                        <div class="relative rounded py-0.5">17</div>
                                                        <div class="relative rounded py-0.5">18</div>
                                                        <div class="relative rounded py-0.5">19</div>
                                                        <div class="relative rounded py-0.5">20</div>
                                                        <div class="relative rounded py-0.5">21</div>
                                                        <div class="relative rounded py-0.5">22</div>
                                                        <div class="relative rounded bg-pending/20 py-0.5 dark:bg-pending/30">
                                                            23
                                                        </div>
                                                        <div class="relative rounded py-0.5">24</div>
                                                        <div class="relative rounded py-0.5">25</div>
                                                        <div class="relative rounded py-0.5">26</div>
                                                        <div class="relative rounded bg-primary/10 py-0.5 dark:bg-primary/50">
                                                            27
                                                        </div>
                                                        <div class="relative rounded py-0.5">28</div>
                                                        <div class="relative rounded py-0.5">29</div>
                                                        <div class="relative rounded py-0.5">30</div>
                                                        <div class="relative rounded py-0.5 text-slate-500">1</div>
                                                        <div class="relative rounded py-0.5 text-slate-500">2</div>
                                                        <div class="relative rounded py-0.5 text-slate-500">3</div>
                                                        <div class="relative rounded py-0.5 text-slate-500">4</div>
                                                        <div class="relative rounded py-0.5 text-slate-500">5</div>
                                                        <div class="relative rounded py-0.5 text-slate-500">6</div>
                                                        <div class="relative rounded py-0.5 text-slate-500">7</div>
                                                        <div class="relative rounded py-0.5 text-slate-500">8</div>
                                                        <div class="relative rounded py-0.5 text-slate-500">9</div>
                                                    </div>
                                                </div>
                                                <div class="border-t border-slate-200/60 p-5">
                                                    <div class="flex items-center">
                                                        <div class="mr-3 h-2 w-2 rounded-full bg-pending"></div>
                                                        <span class="truncate">UI/UX Workshop</span>
                                                        <span class="font-medium xl:ml-auto">23th</span>
                                                    </div>
                                                    <div class="mt-4 flex items-center">
                                                        <div class="mr-3 h-2 w-2 rounded-full bg-primary"></div>
                                                        <span class="truncate"> VueJs Frontend Development </span>
                                                        <span class="font-medium xl:ml-auto">10th</span>
                                                    </div>
                                                    <div class="mt-4 flex items-center">
                                                        <div class="mr-3 h-2 w-2 rounded-full bg-warning"></div>
                                                        <span class="truncate">Laravel Rest API</span>
                                                        <span class="font-medium xl:ml-auto">31th</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END: Schedules -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Content -->
            </div>
        </div>
        <!-- BEGIN: Vendor JS Assets-->
        <script src="dist/js/vendors/dom.js"></script>
        <script src="dist/js/vendors/tailwind-merge.js"></script>
        <script src="dist/js/vendors/lucide.js"></script>
        <script src="dist/js/vendors/tippy.js"></script>
        <script src="dist/js/vendors/dayjs.js"></script>
        <script src="dist/js/vendors/litepicker.js"></script>
        <script src="dist/js/vendors/popper.js"></script>
        <script src="dist/js/vendors/dropdown.js"></script>
        <script src="dist/js/vendors/tiny-slider.js"></script>
        <script src="dist/js/vendors/transition.js"></script>
        <script src="dist/js/vendors/chartjs.js"></script>
        <script src="dist/js/vendors/leaflet-map.js"></script>
        <script src="dist/js/vendors/axios.js"></script>
        <script src="dist/js/utils/colors.js"></script>
        <script src="dist/js/utils/helper.js"></script>
        <script src="dist/js/vendors/simplebar.js"></script>
        <script src="dist/js/vendors/modal.js"></script>
        <script src="dist/js/components/base/theme-color.js"></script>
        <script src="dist/js/components/base/lucide.js"></script>
        <script src="dist/js/components/base/tippy.js"></script>
        <script src="dist/js/components/base/litepicker.js"></script>
        <script src="dist/js/components/report-line-chart.js"></script>
        <script src="dist/js/components/report-pie-chart.js"></script>
        <script src="dist/js/components/report-donut-chart.js"></script>
        <script src="dist/js/components/report-donut-chart-1.js"></script>
        <script src="dist/js/components/simple-line-chart-1.js"></script>
        <script src="dist/js/components/base/tiny-slider.js"></script>
        <script src="dist/js/themes/tinker.js"></script>
        <script src="dist/js/components/base/leaflet-map-loader.js"></script>
        <script src="dist/js/components/mobile-menu.js"></script>
        <script src="dist/js/components/themes/tinker/top-bar.js"></script> <!-- END: Vendor JS Assets-->
        <!-- BEGIN: Pages, layouts, components JS Assets-->
        <!-- END: Pages, layouts, components JS Assets-->
    </body>
    </html>
