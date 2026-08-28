<x-filament-panels::page>
    <form wire:submit="updatePassword" class="space-y-6">
        <div style="padding-bottom: 16px;">
            <label for="current-password" class="block text-sm font-medium text-gray-950 dark:text-white" style="margin-bottom: 12px;">
                Current password
            </label>
            <x-filament::input.wrapper>
            <x-filament::input
                id="current-password"
                wire:model="currentPassword"
                type="password"
                autocomplete="current-password"
                required
            />
            </x-filament::input.wrapper>
        </div>

        <div style="padding-bottom: 16px;">
            <label for="new-password" class="block text-sm font-medium text-gray-950 dark:text-white" style="margin-bottom: 12px;">
                New password
            </label>
            <x-filament::input.wrapper>
            <x-filament::input
                id="new-password"
                wire:model="password"
                type="password"
                autocomplete="new-password"
                required
            />
            </x-filament::input.wrapper>
        </div>

        <div style="padding-bottom: 16px;">
            <label for="password-confirmation" class="block text-sm font-medium text-gray-950 dark:text-white" style="margin-bottom: 12px;">
                Confirm new password
            </label>
            <x-filament::input.wrapper>
            <x-filament::input
                id="password-confirmation"
                wire:model="password_confirmation"
                type="password"
                autocomplete="new-password"
                required
            />
            </x-filament::input.wrapper>
        </div>

        <x-filament::button type="submit">
            Change password
        </x-filament::button>
    </form>
</x-filament-panels::page>
