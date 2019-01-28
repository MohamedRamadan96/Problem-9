function reverseInParentheses($inputString)
{

    if (empty($inputString) || $inputString == '()')
    {
        return '';
    }
    else if (stripos($inputString, '(')  !== false)
    {
        return reverseInParentheses(reverse($inputString));
    }
    else
    {
        return $inputString;
    }
}

function reverse($inputString)
{
    return preg_replace_callback('/\(([^()]*)\)/i', function ($match)
      {
        return strrev($match[1]);
        },
        $inputString);
}
