<?php

class Finance
{
    public function getByType($data, $type): array
    {
        $result = [];
        foreach ($data as $value){
            if ($value['type'] === $type){
                $result[] = $value;
            }
        }

        return $result;
    }
}