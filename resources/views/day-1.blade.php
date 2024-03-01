<x-app-layout :title="'Day 1'">
    <livewire:facebook-post
        {{-- Post metadata --}}
        :profile-picture="asset('images/pfp.png')"
        :user-name="'Hatsu Shiroyuki'"
        :date-posted="'2024-03-01'"
        :post-visibility="\App\Enums\PostVisibility::PUBLIC"

        {{-- Medias --}}
        {{-- Uncomment media below to see the differences --}}
        :media="[
            asset('images/day-1/arturs-kipsts-6k40jf7ey3o-unsplash.jpg'),
            asset('images/day-1/chris-bair-bOK5eWMDIWk-unsplash.jpg'),
            // asset('images/day-1/katsuma-tanaka-9msvtIa-tCM-unsplash.jpg'),
            // asset('images/day-1/luke-miller-BRoHnCV_6tc-unsplash.jpg'),
            // asset('images/day-1/matej-pribanic-daAcF4mB6AE-unsplash.jpg'),
            // asset('images/day-1/neom-ARpmY5qq7Lk-unsplash.jpg'),
            // asset('images/day-1/neom-LAj90eAXOZA-unsplash.jpg'),
        ]"

        {{-- Caption --}}
        {{-- Uncomment the shorter and the longer caption --}}
        {{-- :caption='"Maecenas id leo ac tellus lacinia feugiat. In hac habitasse platea dictumst. Nam congue nisi mi, in sodales ligula lobortis sit amet."' --}}
        :caption='"Maecenas id leo ac tellus lacinia feugiat. In hac habitasse platea dictumst. Nam congue nisi mi, in sodales ligula lobortis sit amet. Suspendisse molestie sapien eu luctus accumsan. Mauris scelerisque velit ullamcorper nibh lobortis, sit amet viverra lorem vehicula. Nam nec ante vel orci molestie congue. Pellentesque in diam eget ligula tincidunt viverra. Morbi id dictum dui. Donec bibendum maximus libero, ut tempus augue.\n\n Aenean posuere sit amet tortor ac aliquet. Maecenas nec velit ornare, aliquam arcu quis, iaculis urna. Nulla faucibus non velit vitae porta. Duis tincidunt sem ut nisi hendrerit sodales. In aliquam mauris in vehicula lobortis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam sed diam quam. Nulla ultricies sagittis felis. Curabitur pharetra et orci in scelerisque. Aliquam vel fringilla elit, in semper nunc. Pellentesque non ligula quis justo ultrices iaculis ac non lorem."'

        {{-- Counters --}}
        :reactions="[
            \App\Enums\PostReaction::LIKE->value => 1000,
            \App\Enums\PostReaction::LOVE->value => 906,
            \App\Enums\PostReaction::CARE->value => 26,
            \App\Enums\PostReaction::WOW->value => 13,
            \App\Enums\PostReaction::HAHA->value => 2,
        ]"
        :comments-count="42"
        :shares-count="461"
    />
</x-app-layout>