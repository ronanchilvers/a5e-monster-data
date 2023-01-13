---
statblock: true
name: 'Coven Night Hag - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Medium
type: Fey
cr: 7
ac: 17
hp: 120
hit_dice: '16d8 + 48'
speed: '30 ft.'
stats:
    - 18
    - 14
    - 16
    - 16
    - 14
    - 16
saves:
    constitution: 6
    wisdom: 5
skillsaves:
    arcana: 6
    deception: 6
    insight: 5
    perception: 5
    stealth: 5
senses: 'darkvision 60 ft., passive Perception 15'
languages: 'Abyssal, Common, Infernal'
traits:
    - { name: Curse, desc: "A creature touched by the hag's claws is magically cursed for 30 days. While under this curse, the target has disadvantage on attack rolls made against the hag." }
    - { name: Evil, desc: 'The hag radiates an Evil aura.' }
    - { name: 'Magic Resistance', desc: 'The hag has advantage on saving throws against spells and magical effects.' }
actions:
    - { name: Claws, desc: "Melee Weapon Attack: +5 to hit, reach 5 ft., one creature. Hit: 12 (2d8 + 3) slashing damage, and the target is subject to the hag's Curse trait." }
    - { name: 'Sleep Touch', desc: "Melee Spell Attack: +5 to hit, reach 5 ft., one creature. Hit: The target falls asleep for 4 hours or until it takes damage or is shaken awake. Once the hag successfully hits a target, it can't make this attack again until it finishes a long rest." }
    - { name: Shapeshift, desc: "The hag magically polymorphs into a Small or Medium humanoid. Equipment it is carrying isn't transformed. It retains its claws in any form. It has no true form and remains in its current form when it dies." }
    - { name: 'Planar Travel (3/Day)', desc: 'The hag magically enters the Ethereal Plane from the Material Plane, or vice versa. Alternatively, the hag is magically transported to the Material Plane, Hell, or the Abyss, arriving within 10 miles of its desired destination.' }
    - { name: 'Nightmare Haunting (1/Day)', desc: "While on the Ethereal Plane, the hag magically touches a sleeping creature that is under the night hag's Curse and is not protected by a magic circle or protection from evil and good spell or similar magic. As long as the touch persists, the target has terrible nightmares. If the nightmares last for 1 hour, the target gains no benefit from the rest, and its hit point maximum is reduced by 5 (1d10) until the curse ends. If this effect reduces the target's hit points maximum to 0, the target dies and the hag captures its soul. The reduction to the target's hit point maximum lasts until removed by greater restoration or similar magic." }
reactions:
    - { name: 'Steal Magic (3/Day)', desc: 'When a creature the hag can see within 60 feet casts a spell using a 3rd-level or lower spell slot, the hag attempts to steal its power. The caster makes a DC 14 saving throw using its spellcasting ability. On a failure, the spell fails, and the hag gains 5 (1d10) temporary hit points per level of the spell slot used.' }
'bonus actions':
    - { name: 'Fragmentary Dream', desc: 'The hag creates a terrifying illusion visible only to one creature that it can see within 120 feet. The creature makes a DC 14 Wisdom saving throw. It takes 22 (4d10) psychic damage and becomes frightened until the end of its turn on a failure, or takes half damage on a success.' }
combat:
    - { name: 'The night hag hits as many creatures as possible with its claws and then escapes to the Ethereal Plane', desc: "Its goal in combat isn't to kill but to curse. It returns later to haunt victims of its curse." }
    - { name: 'When a night hag reduces a lone creature to 0 hit points with its claws, it often knocks the creature out rather than killing it', desc: 'It prefers Nightmare Haunting to mere killing.' }

---
```statblock
monster: Coven Night Hag - A5E
```
