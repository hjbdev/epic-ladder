<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ladder</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        @vite(['resources/js/app.js', 'resources/css/app.css'])
    </head>
    <body class="antialiased h-full w-full overflow-auto dark:bg-zinc-900 dark:text-white">
        <div class="p-6 flex gap-6">
            <section>
                <x-round-title>Round 1</x-round-title>
                <x-ladder group="Group 1">
                    <x-ladder-item team-a="Neighbours" team-b="JTM Fan Club" score="13-5" />
                    <x-ladder-item team-a="K10" team-b="K9" score="13-5" />
                    <x-ladder-item team-a="Rum Bumpers" team-b="Reason" score="13-1" />
                    <x-ladder-item team-a="TLR" team-b="flowstate" score="13-10" />
                    <x-ladder-item team-a="Coalesce" team-b="Shaman" score="13-6" />
                    <x-ladder-item team-a="Royals" team-b="Disco Diggers" score="13-7" />
                    <x-ladder-item team-a="Raptors" team-b="Invictum" score="13-4" />
                    <x-ladder-item team-a="Souls Land" team-b="Anita Max Wynn" score="13-4" />
                </x-ladder>
                <x-ladder group="Group 2">
                    <x-ladder-item team-a="BTEC Neds" team-b="Skill Checked" score="11-13" />
                    <x-ladder-item team-a="Ross Kemp Ryan" team-b="Binmen International" score="10-13" />
                    <x-ladder-item team-a="Tyreece Simpson" team-b="Katana Gaming" score="11-13" />
                    <x-ladder-item team-a="Antenna Man" team-b="The Book Club" score="19-17" />
                </x-ladder>
                <x-ladder group="Group 3">
                    <x-ladder-item team-a="MC Village" team-b="Wotshedunthatfor" score="13-5" />
                    <x-ladder-item team-a="Database Checkers" team-b="Change Your Name" score="13-10" />
                    <x-ladder-item team-a="Mario has an 8 ball" team-b="Spoons?" score="3-13" />
                    <x-ladder-item team-a="The Bin Chasers" team-b="Ctrl Alt Defeat" score="8-13" />
                </x-ladder>
                <x-ladder group="Group 4">
                    <x-ladder-item team-a="LAN Down Under" team-b="Cache Money" score="14-16" />
                </x-ladder>
            </section>
            <section>
                <x-round-title>Round 2</x-round-title>
                <x-ladder group="Group 1">
                    <x-ladder-item team-a="Neighbours" team-b="Souls Land" score="13-0" />
                    <x-ladder-item team-a="K10" team-b="Raptors" score="13-9" />
                    <x-ladder-item team-a="Rum Bumpers" team-b="ROYALS" score="13-4" />
                    <x-ladder-item team-a="TLR" team-b="Coalesce" score="13-10" />
                </x-ladder>
                <x-ladder group="Group 2">
                    <x-ladder-item team-a="Anita Max Wynn" team-b="Antenna Man" score="13-8" />
                    <x-ladder-item team-a="Invictum" team-b="Katana" score="16-12" />
                    <x-ladder-item team-a="Disco Diggers" team-b="Binmen International" score="13-4" />
                    <x-ladder-item team-a="Shaman Esports" team-b="Skill Checked" score="13-8" />
                    <x-ladder-item team-a="Flowstate" team-b="JTM Fan Club" score="16-13" />
                    <x-ladder-item team-a="Reason" team-b="K9" score="8-13" />
                </x-ladder>
                <x-ladder group="Group 3">
                    <x-ladder-item team-a="Book Club" team-b="Ctrl Alt Defeat" score="13-8" />
                    <x-ladder-item team-a="Tyreece Simpson" team-b="Spoons?" score="13-9" />
                    <x-ladder-item team-a="Ross Kemp Ryan" team-b="Database Checkers" score="13-8" />
                    <x-ladder-item team-a="BTEC Neds" team-b="MC Village" score="13-5" />
                </x-ladder>
                <x-ladder group="Group 4">
                    <x-ladder-item team-a="Bin Chasers" team-b="Cache Money" score="13-5" />
                    <x-ladder-item team-a="Mario has an 8 ball" team-b="LAN Down Under" score="13-9" />
                    <x-ladder-item team-a="Change Your Name" team-b="WotsHeDunThatFor" score="13-6" />
                </x-ladder>
            </section>
            <section>
                <x-round-title>Round 3</x-round-title>
                <x-ladder group="Group 1">
                    <x-ladder-item team-a="Neighbours" team-b="TLR" score="13-10" />
                    <x-ladder-item team-a="K10" team-b="Rum Bumpers" score="13-9" />
                </x-ladder>
                <x-ladder group="Group 2">
                    <x-ladder-item team-a="Raptors" team-b="Anita Max Wynn" score="9-13" seeding />
                    <x-ladder-item team-a="Coalesce" team-b="K9" score="13-9" />
                    <x-ladder-item team-a="ROYALS" team-b="flowstate" score="2-13" />
                    <x-ladder-item team-a="Souls Land" team-b="Shaman" score="6-13" />
                    <x-ladder-item team-a="Invictum" team-b="Disco Diggers" score="13-3" />
                </x-ladder>
                <x-ladder group="Group 3">
                    <x-ladder-item team-a="Reason" team-b="Antenna Men" score="13-7" seeding />
                    <x-ladder-item team-a="JTM Fan Club" team-b="BTEC NEDS" score="7-13" />
                    <x-ladder-item team-a="Skillchecked" team-b="Ross Kemp Ryan" score="14-16" />
                    <x-ladder-item team-a="Binmen International" team-b="Tyreese Simpson" score="9-13" />
                    <x-ladder-item team-a="Katana Gaming" team-b="The Book Club" score="5-13" />
                </x-ladder>
                <x-ladder group="Group 4">
                    <x-ladder-item team-a="MC Village" team-b="Cache Money" score="13-2" />
                    <x-ladder-item team-a="Database Checkers" team-b="Mario has an 8 ball" score="6-13" />
                    <x-ladder-item team-a="Spoons?" team-b="The Bin Chasers" score="13-16" />
                    <x-ladder-item team-a="Ctrl Alt Defeat" team-b="Change Your Name" score="11-13" />
                </x-ladder>
                <x-ladder group="Group 5">
                    <x-ladder-item team-a="LAN Down Under" team-b="WotsHeDunThatFor" score="6-13" />
                </x-ladder>
            </section>
        </div>
    </body>
</html>

{{-- font-bold bg-orange-200 dark:bg-orange-800 --}}
