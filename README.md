Простой набор классов и тестов показывающий эволюцию и возможности мокирования.

Дано две абстракции: ExecClass и DataClass. ExecClass использует метод класса DataClass для получения какого-то его внутреннего состояния.
Для этого объект ExecClass создает инстанс объекта DataClass внутри конструктора. 

Абстракция ExecClass реализована в двух вариантах:
* ExecClassWithoutInjection - жесткая зависимость от класса DataClass
* ExecClassWithInjection - инъекция зависимости от DataClass через параметр конструктора

Реализованы следующие тесты (дано как возможные примеры использования):
* testExecClassWithInstance - простая инъекция инстанса объекта, без какого-либо мокирования
* testExecClassWithMock - простая инъекция Mock объекта созданного средствами PHPUnit с заранее определенным поведением 
* testExecClassWithMockeryMock - подмена инстанса объекта внутри конструктора ExecClass средствами Mockery overload  

