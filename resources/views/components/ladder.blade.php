<div class="rounded border dark:border-zinc-700 p-4 mb-4 last:mb-0">
    <div class="text-center text-xl font-bold mb-4">{{ $group }}</div>
    <table class="w-full">
        <thead>
            <tr>
                <th class="text-center font-normal text-xs px-3">Team A</th>
                <th class="text-center font-normal text-xs px-3">Score</th>
                <th class="text-center font-normal text-xs px-3">Team B</th>
            </tr>
        </thead>
        <tbody>
            {{ $slot }}
        </tbody>
    </table>
</div>