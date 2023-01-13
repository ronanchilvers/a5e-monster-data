---
statblock: true
name: 'Abominable Snowman - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Large
type: Monstrosity
cr: 4
ac: 12
hp: 136
hit_dice: '16d10 + 48'
speed: '40 ft., climb 40 ft.'
stats:
    - 18
    - 12
    - 16
    - 8
    - 12
    - 16
damage_immunities: cold
skillsaves:
    - { perception: 3 }
    - { stealth: 3 }
senses: 'passive Perception 13'
languages: Yeti
traits:
    - { name: Camouflage, desc: 'The yeti has advantage on Stealth checks made to hide in snowy terrain.' }
    - { name: 'Fire Fear', desc: 'When the yeti takes fire damage, it is rattled until the end of its next turn.' }
    - { name: 'Storm Sight', desc: "The yeti's vision is not obscured by weather conditions." }
actions:
    - { name: Multiattack, desc: 'The yeti uses Chilling Gaze and makes two claw attacks.' }
    - { name: Claw, desc: 'Melee Weapon Attack: +6 to hit, reach 10 ft., one target. Hit: 9 (2d4 + 4) slashing damage.' }
    - { name: 'Chilling Gaze (Gaze)', desc: "One creature within 30 feet that is not immune to cold damage makes a DC 13 Constitution saving throw. On a failure, the creature takes 10 (3d6) cold damage and is paralyzed for 1 minute. It repeats the saving throw at the end of each of its turns, ending the effect on a success. If a creature's saving throw is successful or the effect ends for it, it is immune to any Chilling Gaze for 24 hours." }
'bonus actions':
    'bonus actions': ['The snowman has the following bonus actions, which it can use only while bloodied:']
    0: { name: 'Elite Recovery', desc: 'The snowman ends one negative effect currently affecting it. It can use this bonus action as long as it has at least 1 hit point, even while unconscious or incapacitated.' }
    1: { name: 'Cold Breath', desc: 'The snowman breathes a 30-foot cone of freezing wind. Each creature in the area makes a DC 13 Constitution saving throw, taking 21 (6d10) cold damage on a failed save or half damage on a success.' }
    2: { name: 'Blizzard (1/Day)', desc: "The snowman summons a magical blizzard that affects a 500-foot-radius area for 10 minutes or until the snowman dies. The area is difficult terrain, and a creature's visibility is reduced to 20 feet; beyond this, vision is obscured by snow. A creature in the area that doesn't move from its space during its turn takes 7 (2d6) cold damage." }
    3: { name: 'Roar (1/Day)', desc: "Each creature of the snowman's choice within 120 feet that hears its roar makes a DC 13 Charisma saving throw. On a failure, a creature is frightened for 1 minute. While frightened in this way, a creature is paralyzed. A creature repeats the saving throw at the end of its turns, ending the effect on itself on a success." }
combat:
    - { name: 'The yeti uses its Chilling Gaze and then claws the same target', desc: 'If the target is paralyzed, on its next turn the yeti uses Chilling Gaze and its claws against a different target, if one is available. The yeti flees if it takes fire damage while bloodied.' }

---
```statblock
monster: Abominable Snowman - A5E
```
