<x-admin::layouts>
    <!-- Title of the page -->
    <x-slot:title>
        @lang('blog::app.post.page-title')
    </x-slot:title>

    <div class="flex gap-4 justify-between max-sm:flex-wrap">
        <p class="py-[11px] text-xl text-gray-800 dark:text-white font-bold">
            <!-- Section Title -->
            @lang('blog::app.post.page-title')
        </p>

        <div class="flex gap-x-2.5 items-center">
            <!-- Action Button -->

        </div>
    </div>

<!-- Admin Table -->
<x-admin::table>
    <x-admin::table.thead>
        <x-admin::table.thead.tr>
            <x-admin::table.th>
                Heading 1
            </x-admin::table.th>

            <x-admin::table.th>
                Heading 2
            </x-admin::table.th>

            <x-admin::table.th>
                Heading 3
            </x-admin::table.th>

            <x-admin::table.th>
                Heading 4
            </x-admin::table.th>
        </x-admin::table.thead.tr>
    </x-admin::table.thead>

    <x-admin::table.tbody>
        <x-admin::table.tbody.tr>
            <x-admin::table.td>
                Column 1
            </x-admin::table.td>

            <x-admin::table.td>
                Column 2
            </x-admin::table.td>

            <x-admin::table.td>
                Column 3
            </x-admin::table.td>

            <x-admin::table.td>
                Column 4
            </x-admin::table.td>
        </x-admin::table.thead.tr>
    </x-admin::table.tbody>
</x-admin::table>



</x-admin::layouts>
