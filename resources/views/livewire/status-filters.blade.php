<nav class="items-center justify-between hidden text-xs text-gray-400 md:flex">
    <ul class="flex pb-3 space-x-10 font-semibold uppercase border-b-4">
        <li><a href="#" wire:click.prevent="setStatus('All')" class="pb-3 @if ($status == 'All') border-blue text-gray-900 @endif transition duration-150 ease-in border-b-4 hover:border-blue">All Ideas(87)</a></li>
        <li><a href="#" wire:click.prevent="setStatus('Considering')" class="pb-3 @if ($status == 'Considering') border-blue text-gray-900 @endif transition duration-150 ease-in border-b-4 hover:border-blue">Considering(6)</a></li>
        <li><a href="#" wire:click.prevent="setStatus('In Progress')" class="pb-3 @if ($status == 'Inprogress') border-blue text-gray-900 @endif  transition duration-150 ease-in border-b-4 hover:border-blue">Inprogress(1)</a></li>
        <li><a href="#" wire:click.prevent="setStatus('Implemented')" class="pb-3 @if ($status == 'Implemented') border-blue text-gray-900 @endif  transition  duration-150 ease-in border-b-4 hover:border-blue">Implemented(6)</a></li>
        <li><a href="#" wire:click.prevent="setStatus('Closed')" class="pb-3 @if ($status == 'Closed') border-blue text-gray-900 @endif  transition duration-150 ease-in border-b-4 hover:border-blue">Closed(6)</a></li>
    </ul>
</nav>
