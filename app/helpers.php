<?php

 function read_csv_file(string $filePath): array
    {
        // ファイル存在チェック
        if(!\File::exists($filePath)) {
            throw new Exception('CSVファイルが見つかりませんでした。 filePath: '.$filePath);
        }

        $file = new \SplFileObject($filePath);
        $file->setFlags(
            \SplFileObject::READ_CSV
            | \SplFileObject::READ_AHEAD
            | \SplFileObject::SKIP_EMPTY
        );

        $key = [];
        $data = [];
        foreach ($file as $i => $row)
        {
            // 1行目を連想配列のキーとする
            if($i === 0) {
                foreach($row as $j => $value) {
                    $key[$j] = $value;
                }
                continue;
            }

            $line = [];
            foreach($row as $j => $value) {
                $line[$key[$j]] = $value;
            }
            $data[] = $line;
        }
        return $data;
    }