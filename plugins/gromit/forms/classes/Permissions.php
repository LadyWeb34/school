<?php

namespace GromIT\Forms\Classes;

class Permissions
{
    public const ANY = 'gromit.forms.*';

    public const EDIT_FORMS = 'gromit.forms.edit_forms';
    public const EXPORT_SUBMISSIONS = 'gromit.forms.export_submissions';
    public const DELETE_SUBMISSIONS = 'gromit.forms.delete_submissions';
    public const SHOW_SUBMISSIONS = 'gromit.forms.show_submissions';
    public const EDIT_SETTINGS = 'gromit.forms.edit_settings';

    /**
     * Lists permissions declared by plugin.
     *
     * @return \string[][]
     */
    public static function lists(): array
    {
        return [
            self::EDIT_FORMS         => [
                'tab'   => 'Формы',
                'label' => __('gromit.forms::lang.permissions.' . self::EDIT_FORMS)
            ],
            self::SHOW_SUBMISSIONS   => [
                'tab'   => 'Формы',
                'label' => __('gromit.forms::lang.permissions.' . self::SHOW_SUBMISSIONS)
            ],
            self::EXPORT_SUBMISSIONS => [
                'tab'   => 'Формы',
                'label' => __('gromit.forms::lang.permissions.' . self::EXPORT_SUBMISSIONS)
            ],
            self::DELETE_SUBMISSIONS => [
                'tab'   => 'Формы',
                'label' => __('gromit.forms::lang.permissions.' . self::DELETE_SUBMISSIONS)
            ],
            self::EDIT_SETTINGS      => [
                'tab'   => 'Формы',
                'label' => __('gromit.forms::lang.permissions.' . self::EDIT_SETTINGS)
            ],
        ];
    }
}
