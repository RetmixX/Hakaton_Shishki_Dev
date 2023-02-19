<?php

namespace Domain\Quiz\Enums;

enum PassingStatusTheme:string
{
    case Passed = 'Пройдена';
    case NotPassed = 'Не пройдена';

    case InProcess = 'В процессе';
}
