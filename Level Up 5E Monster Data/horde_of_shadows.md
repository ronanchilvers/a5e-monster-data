---
statblock: true
name: 'Horde of Shadows - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Large
type: Undead
cr: 4
ac: 12
hp: 90
hit_dice: 20d8
speed: '40 ft.'
stats:
    - 6
    - 14
    - 10
    - 8
    - 10
    - 14
damage_resistances: 'acid, cold, fire, lightning, thunder; damage from nonmagical weapons'
damage_immunities: 'necrotic, poison'
condition_immunities: 'charmed, fatigue, frightened, grappled, paralyzed, petrified, poisoned, prone, restrained'
'damage vulenrabilities': radiant
skillsaves:
    - { stealth: 4 }
senses: 'darkvision 120 ft., passive Perception 10'
traits:
    - { name: Amorphous, desc: 'The horde can pass through an opening as narrow as 1 inch wide without squeezing.' }
    - { name: 'Area Vulnerability', desc: 'The horde takes double damage from any effect that targets an area.' }
    - { name: 'Horde Dispersal', desc: 'When the horde is reduced to 0 hit points, it turns into 2 (1d4) shadows, each of which are bloodied.' }
    - { name: Horde, desc: 'The horde is composed of 5 or more shadows. If it is subjected to a spell, attack, or other effect that affects only one target, it takes any damage but ignores other effects. It can share its space with Medium or smaller creatures or objects.' }
    - { name: 'Sunlight Weakness', desc: 'While in sunlight, the horde has disadvantage on attack rolls, ability checks, and saving throws.' }
    - { name: 'Undead Nature', desc: "The horde doesn't require air, sustenance, or sleep." }
actions:
    - { name: Multiattack, desc: 'The horde makes up to three claw attacks, but no more than one against each target.' }
    - { name: Claw, desc: "Melee Weapon Attack: +4 to hit, reach 5 ft., one creature. Hit: 16 (4d6 + 2) necrotic damage, and the target makes a DC 12 Constitution saving throw. On a failure, the target is cursed until it finishes a short or long rest or is the subject of remove curse or a similar spell. While cursed, the target makes attack rolls, Strength checks, and Strength saving throws with disadvantage. If the target dies while cursed, a new undead shadow rises from the corpse in 1d4 hours, the corpse no longer casts a natural shadow, and the target can't be raised from the dead until the new shadow is destroyed." }
'bonus actions':
    - { name: 'Shadow Sneak', desc: 'The horde takes the Hide action even if obscured only by dim light or darkness.' }
combat:
    - { name: 'The horde lurks beyond the range of bright light, waiting for a moment of darkness', desc: 'It enters bright light if it is attacked. The horde seeks out the largest concentration of enemies, provoking opportunity attacks if necessary, so that it can make as many attacks as possible. It flees if it is bloodied and in bright light.' }

---
```statblock
monster: Horde of Shadows - A5E
```
