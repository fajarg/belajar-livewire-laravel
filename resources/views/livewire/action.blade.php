<div>
    <button type="button" wire:click="AddTwoNumber(32, 55)">Sum</button><br>
    <textarea wire:keydown.enter="DisplayMessage($event.target.value)"></textarea><br>
    <form action="" wire:submit.prevent="getSum">
        Num 1 :<input type="text" name="num1" wire:model="num1">
        Num 2 :<input type="text" name="num2" wire:model="num2">
        <button type="submit">Submit</button>
    </form>

    Sum: {{$sum}}
    <br>

    Message: {{$message}}
</div>