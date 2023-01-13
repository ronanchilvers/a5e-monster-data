---
statblock: true
name: 'Efreeti - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Large
type: Elemental
cr: 11
ac: 17
hp: 172
hit_dice: '15d10 + 90'
speed: '40 ft., fly 60 ft.'
stats:
    - 22
    - 18
    - 22
    - 14
    - 16
    - 16
damage_immunities: fire
saves:
    - { dexterity: 8 }
    - { intelligence: 6 }
    - { wisdom: 7 }
    - { charisma: 7 }
skillsaves:
    - { athletics: 10 }
    - { intimidation: 7 }
    - { perception: 7 }
senses: 'darkvision 120 ft., passive Perception 17'
languages: Ignan
traits:
    0: { name: 'Innate Spellcasting', desc: "The efreeti's innate spellcasting ability is Charisma (spell save DC 15). It can innately cast the following spells, requiring no material components:" }
    traits: ['At will: alter self (can assume Medium or Large form), detect magic', '3/day each: creation, gaseous form, major image, tongues', '1/day each: conjure elemental (fire elemental only), plane shift (to Elemental Plane of Fire only)']
    1: { name: 'Elemental Demise', desc: 'When a genie dies, its body becomes a mote of elemental energy. This mote might take the form of a glowing chunk of earth, a shard of crystallized air, or an ever-burning ember.' }
actions:
    - { name: Multiattack, desc: 'The efreeti makes two brass sword attacks or hurls flame twice. The efreeti can replace one attack with a kick.' }
    - { name: 'Brass Sword', desc: 'Melee Weapon Attack: +10 to hit, reach 10 ft., one target. Hit: 15 (2d8 + 6) slashing damage plus 7 (2d6) fire damage.' }
    - { name: Kick, desc: 'Melee Weapon Attack: +10 to hit, reach 5 ft., one target. Hit: 11 (2d4 + 6) bludgeoning damage, and the target is pushed 10 feet away from the efreet.' }
    - { name: 'Hurl Flame', desc: 'Ranged Spell Attack: +7 to hit, range 120 ft., one target. Hit: 21 (6d6) fire damage.' }
'bonus actions':
    - { name: 'Fiery Wall (1/Day)', desc: 'An opaque wall of magical flame rises from the ground within 60 feet. The wall is 6 inches thick and can be up to 20 feet high and 30 feet long. Each creature within the wall when it appears makes a DC 15 Dexterity saving throw, taking 18 (4d8) fire damage on a failed save or half damage on a success. A creature also takes 18 (4d8) fire damage when it enters the wall for the first time on a turn or ends its turn there. The wall disappears when the efreet is killed or incapacitated, or when it uses an action to dismiss it.' }
combat:
    - { name: 'The efreeti prefers to fight in melee, although it will sometimes take to the sky and hurl flame at targets with inferior ranged options', desc: 'It uses its Fiery Wall to burn at least two enemies. It uses Kick to push enemies into the wall or other hazards. Efreet are fearless and only retreat if doing so gives them a tactical advantage.' }

---
```statblock
monster: Efreeti - A5E
```
