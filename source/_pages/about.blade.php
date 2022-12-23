@php
    $title = 'About us';
@endphp

@extends('_layouts.main')

@section('body')
<x-page
    :image="'/assets/images/about-us.jpeg'"
    :title="$title"
>
    <div class="[&>p]:mb-4">
        <p>Welcome to our blog about business measurement and automation!</p>
        <p>For us, the most engaging and rewarding aspect of business is finding ways to improve and streamline processes through the use of technology and data analysis. We are passionate about programming, spreadsheets, and working with numbers to find solutions for businesses.</p>
        <p>We started this blog to share our expertise and experience in these areas, and to provide valuable insights and advice to others who are interested in maximizing their business's potential through measurement and automation.</p>
        <p>Running a business can be challenging, with many interconnected tasks that can seem like a tangled web. As business owners and managers, it is our job to navigate this complex landscape and make the most of our limited time and resources. That's why we are always looking for ways to automate business processes, to make them more clear and transparent.</p>
        <p>But with so many different tasks and processes to consider, it can be difficult to know where to focus our efforts. That's why we believe it is so important to identify and track key performance indicators (KPIs) - the most valuable metrics for our business. By analyzing this data, we can understand which processes are the most important and prioritize them for automation.</p>
        <p>On this blog, we will delve into the technical side of automation and provide examples and "how-to" guides for implementing these techniques in your own business.</p>
        <p>If you have any questions, ideas, or topics that you would like us to cover, we welcome your feedback. Please feel free to contact us at <a href="mailto:info@templid.com" class="text-indigo-500 hover:text-indigo-600">info@templid.com</a>.</p>
    </div>
</x-page>
@endsection
