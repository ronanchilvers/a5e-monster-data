---
statblock: true
name: 'Azer - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Medium
type: Elemental
cr: 2
ac: 16
hp: 39
hit_dice: '6d8 + 12'
speed: '30 ft.'
stats:
    - 16
    - 12
    - 14
    - 10
    - 12
    - 10
damage_immunities: 'fire, poison'
condition_immunities: poisoned
'damage vulenrabilities': cold
senses: 'passive Perception 11'
languages: Ignan
traits:
    - { name: 'Fiery Aura', desc: 'A creature that ends its turn within 5 feet of one or more azers takes 5 (1d10) fire damage. The azer sheds bright light in a 10-foot radius and dim light for an additional 10 feet.' }
actions:
    - { name: Hammer, desc: 'Melee Weapon Attack: +5 to hit, reach 5 ft., one target. Hit: 7 (1d8 + 3) bludgeoning damage plus 3 (1d6) fire damage.' }
    - { name: 'Heat Metal', desc: 'Ranged Spell Attack: +4 to hit, range 60 ft., one creature wearing or holding a metal object. Hit: 9 (2d8) fire damage. If a creature is holding the object and suffers damage, it makes a DC 12 Constitution saving throw, dropping the object on a failure.' }
'bonus actions':
    - { name: 'Fire Step', desc: 'While standing in fire, the azer can magically teleport up to 90 feet to a space within fire.' }
combat:
    - { name: 'Azers fight in melee when possible, dealing damage with their Fiery Aura and hammer', desc: 'When possible, they maintain a string of bonfires they can use to make quick advances and retreats with Fire Step.' }

---
```statblock
monster: Azer - A5E
```
