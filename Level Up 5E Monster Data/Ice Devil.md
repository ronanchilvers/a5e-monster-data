---
statblock: true
name: 'Ice Devil'
source: 'Level Up: Monstrous Menagerie'
size: Large
type: Fiend
cr: 12
ac: 18
hp: 180
hit_dice: '19d10 + 76'
speed: '40 ft.'
stats:
    - 20
    - 14
    - 18
    - 18
    - 16
    - 18
damage_resistances: 'damage from nonmagical, non-silvered weapons'
damage_immunities: 'cold, fire, poison'
condition_immunities: poisoned
saves:
    - { dexterity: 6 }
    - { constitution: 8 }
    - { wisdom: 7 }
    - { charisma: 8 }
senses: 'blindsight 60 ft., darkvision 120 ft., passive Perception 13'
languages: 'Infernal, telepathy 120 ft.'
traits:
    - { name: "Devil's Sight", desc: "The devil's darkvision penetrates magical darkness." }
    - { name: 'Lawful Evil', desc: 'The devil radiates a Lawful and Evil aura.' }
    - { name: 'Magic Resistance', desc: 'The devil has advantage on saving throws against spells and magical effects.' }
actions:
    - { name: Multiattack, desc: 'The devil makes one bite attack and one claws attack.' }
    - { name: Bite, desc: 'Melee Weapon Attack: +9 to hit, reach 5 ft., one target. Hit: 12 (2d6 + 5) piercing damage plus 7 (2d6) cold damage.' }
    - { name: Claws, desc: 'Melee Weapon Attack: +9 to hit, reach 5 ft., one target. Hit: 10 (2d4 + 5) slashing damage plus 7 (2d6) cold damage.' }
    - { name: Spear, desc: 'Melee Weapon Attack: +9 to hit, reach 10 ft., one target. Hit: 14 (2d8 + 5) piercing damage plus 10 (3d6) cold damage. If the target is a creature, it makes a DC 16 Constitution saving throw, becoming slowed for 1 minute on a failure. The target repeats the saving throw at the end of each of its turns, ending the effect on a success.' }
    - { name: 'Ice Wall (1/Day)', desc: 'The devil magically creates a wall of ice on a solid surface it can see within 60 feet. The wall is flat, 1 foot thick, and can be up to 50 feet long and 15 feet high. The wall lasts for 1 minute or until destroyed. Each 10-foot section has AC 12, 30 hit points, vulnerability to fire damage, and immunity to cold, necrotic, poison, and psychic damage.' }
    - { name: "If the wall enters a creature's space when it appears, the creature is pushed to one side of the wall (creature's choice)", desc: 'The creature then makes a DC 16 Dexterity saving throw, taking 49 (14d6) cold damage on a successful save or half damage on a success.' }
reactions:
    - { name: 'Freezing Blood (1/Day)', desc: "When a creature within 60 feet that the devil can see hits it with a ranged attack or includes it in a spell's area, the creature makes a DC 16 Constitution saving throw. On a failure, the creature takes 10 (3d6) cold damage and is slowed until the end of its next turn." }
'bonus actions':
    - { name: Tail, desc: 'Melee Weapon Attack: +9 to hit, reach 10 ft., one target. Hit: 11 (2d6 + 5) bludgeoning damage plus 7 (2d6) cold damage.' }
combat:
    - { name: 'The ice devil prefers melee combat, dropping its ice wall on melee attackers in a way that blocks ranged attackers from participating in the battle', desc: "The ice devil uses its spear attack first to slow one or two opponents, and then attacks slowed opponents with bite and claws. The ice devil rarely retreats from melee, though it may do so if threatened by ranged attackers it can't counter." }

---
```statblock
monster: Ice Devil
```
