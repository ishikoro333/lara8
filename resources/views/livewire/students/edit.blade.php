
<div>
    <x-jet-modal wire:model="modalUpdateStatus">
        <x-slot name="slot">
            <div class="flex justify-between items-center border-b p-2 text-xl">
                <div></div>
                <h6 class="text-xl font-bold">編集する</h6>
                <button type="button" wire:click.prevent="closeUpdateModal()">✖</button>
            </div>
            <div class="p-10">
                <!-- content -->
                <form class="w-full">
                    <div class="md:flex md:items-center mb-6">
                        <div class="md:w-1/3">
                            <label for="inline-last-name" class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                                苗字
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <input type="text" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple 500" id="inline-first-name", placeholder="{{ $student->lastname }}" name="lastname" wire:model="lastname">
                            @error('lastname')
                                <span class="block sm:inline text-red-700">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="md:flex md:items-center mb-6">
                        <div class="md:w-1/3">
                            <label for="inline-first-name" class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                                名前
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <input type="text" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-first-name", placeholder="{{ $student->firstname }}" name="firstname" wire:model="firstname">
                            @error('firstname')
                                <span class="block sm:inline text-red-700">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="md:flex md:items-center mb-6">
                        <div class="md:w-1/3">
                            <label for="inline-email" class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                                メールアドレス
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <input type="email" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-email" placeholder="{{ $student->email }}" name="email" wire:model="email">
                            @error('email')
                                <span class="block sm:inline text-red-700">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="md:flex md:items-center mb-6">
                        <div class="md:w-1/3">
                            <label for="inline-phone-number" class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                                電話番号
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <input type="text" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-phone-number", placeholder="{{ $student->phone }}" name="phone" wire:model="phone">
                            @error('phone')
                                <span class="block sm:inline text-red-700">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="flex justify-end">
                        <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-dark font-bold py-2 px-4 rounded" type="button" wire:click.prevent="update()">変更する</button>
                    </div>
                </form>
            </div>
        </x-slot>
    </x-jet-modal>
</div>
