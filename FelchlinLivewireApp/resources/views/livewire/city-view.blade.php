<div>
<input type="text" wire:model="search" placeholder="Search" size="100"/>

<table class="table table-striped table-hover">
    <tbody>
    <th>
        <a href="#" wire:click="doSort('population_rank', 'asc')"> &uarr; </a>
        Rank
        <a href="#" wire:click="doSort('population_rank', 'desc')"> &darr; </a>
    </th>
    <th>
        <a href="#" wire:click="doSort('name', 'asc')"> &uarr; </a>
        City
        <a href="#" wire:click="doSort('name', 'desc')"> &darr; </a>
    </th>
    <th>
        <a href="#" wire:click="doSort('state', 'asc')"> &uarr; </a>
        State
        <a href="#" wire:click="doSort('state', 'desc')"> &darr; </a>
    </th>
    <th>
        <a href="#" wire:click="doSort('population', 'asc')"> &uarr; </a>
        Population
        <a href="#" wire:click="doSort('population', 'desc')"> &darr; </a>
    </th>
        @foreach ($cities as $city)
            <tr class="active"> 
            <td>{{ $city->population_rank }}</td>
            <td>{{ $city->name }} </td>
            <td>WA</td>
            <td>{{ $city->population_2010 }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

</div>