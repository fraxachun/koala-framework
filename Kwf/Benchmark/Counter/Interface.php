<?php
interface Kwf_Benchmark_Counter_Interface
{
    public function increment($name, $value=1);
    public function getValue($name);
}
